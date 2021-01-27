<?php
namespace App\Repository;

use App\Entity\Room;

final class RoomRepository extends BaseRepository
{
    public function checkAndGetRoom(int $RoomId): Room
    {
        $query = 'SELECT * FROM Room WHERE RoomId = :RoomId';
        $statement = $this->database->prepare($query);
        $statement->bindParam(':RoomId', $RoomId);
        $statement->execute();
        $Room = $statement->fetchObject(Room::class);

        return $Room;
    }
    public function createRoom(Room $Room): Room
    {
        $queryselect = 'SELECT * FROM Room ORDER BY RoomId';
        $statementselect = $this->database->prepare($queryselect);
        $statementselect->execute();
        $query = 'INSERT INTO Room(RoomName) VALUES (:RoomName)';
        $RoomId = 0;
        $statement = $this->database->prepare($query);
        $RoomName = $Room->getRoomName();
        $rooms = (array) $statementselect->fetchAll();

        foreach ($rooms as $key ) {
          if ($RoomName == $key['RoomName'])
            {
              $RoomId = $key['RoomId'];
            }
        }
        if ($RoomId == 0)
        {
          $statement->bindParam(':RoomName', $RoomName);
          $statement->execute();
          return $this->checkAndGetRoom((int) $this->database->lastInsertId());
        }
        else
        {
          return $this->checkAndGetRoom((int) $RoomId);
        }
    }
}
