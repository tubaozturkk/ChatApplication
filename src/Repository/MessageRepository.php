<?php
namespace App\Repository;

use App\Entity\Message;

final class MessageRepository extends BaseRepository
{
  public function checkAndGetMessage(int $MessageId): Message
    {
        $query = 'SELECT * FROM Message WHERE MessageId = :MessageId';
        $statement = $this->database->prepare($query);
        $statement->bindParam(':MessageId', $MessageId);
        $statement->execute();
        $Message = $statement->fetchObject(Message::class);

        return $Message;
    }

    public function getMessage(string $RoomName,string $UserName): array
    {
        if($UserName == 'Admin')
        {
          if($RoomName != 'AdminRoom')
          {
            $query = 'SELECT * FROM Message WHERE RoomName =:RoomName ORDER BY Date';
            $statement = $this->database->prepare($query);
            $statement->bindParam(':RoomName', $RoomName);
            $statement->execute();
          }
          else
          {
            $query = 'SELECT * FROM Message ORDER BY Date';
            $statement = $this->database->prepare($query);
            $statement->execute();
          }

        }
        else {
          $query = 'SELECT * FROM Message WHERE RoomName =:RoomName ORDER BY Date';
          $statement = $this->database->prepare($query);
          $statement->bindParam(':RoomName', $RoomName);
          $statement->execute();
        }
        return (array) $statement->fetchAll();
    }
    public function createMessage(string $RoomName,string $UserId,string $Message): Message
    {
        date_default_timezone_set('Europe/Istanbul');
        $query = 'INSERT INTO Message(UserId,Message,Date,RoomName) VALUES (:UserId,:Message,:Date,:RoomName)';
        $statement = $this->database->prepare($query);
        $Date = date('d/m/Y h:i:s a', time());
        $statement->bindParam(':UserId', $UserId);
        $statement->bindParam(':Message', $Message);
        $statement->bindParam(':Date', $Date);
        $statement->bindParam(':RoomName', $RoomName);
        $statement->execute();

        return $this->checkAndGetMessage((int) $this->database->lastInsertId());
    }
}
