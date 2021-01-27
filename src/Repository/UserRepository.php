<?php
namespace App\Repository;

use App\Entity\User;

final class UserRepository extends BaseRepository
{
    public function checkAndGetUser(int $UserId): User
    {
        $query = 'SELECT * FROM User WHERE UserId = :UserId';
        $statement = $this->database->prepare($query);
        $statement->bindParam(':UserId', $UserId);
        $statement->execute();
        $User = $statement->fetchObject(User::class);

        return $User;
    }

    public function create(User $User): User
    {
        $queryselect = 'SELECT * FROM User ORDER BY UserId';
        $statementselect = $this->database->prepare($queryselect);
        $statementselect->execute();
        $query = 'INSERT INTO User(UserName) VALUES (:UserName)';
        $UserId = 0;
        $statement = $this->database->prepare($query);
        $UserName = $User->getUserName();
        $users = (array) $statementselect->fetchAll();
        foreach ($users as $key ) {
          if ($UserName == $key['UserName'])
            {
              $UserId = $key['UserId'];
            }
        }
        if ($UserId == 0)
        {
          $statement->bindParam(':UserName', $UserName);
          $statement->execute();
          return $this->checkAndGetUser((int) $this->database->lastInsertId());
        }
        else
        {
          return $this->checkAndGetUser((int) $UserId);
        }
    }
}
