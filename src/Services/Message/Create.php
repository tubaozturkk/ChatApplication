<?php
namespace App\Services\Message;

use App\Entity\Message;

final class Create extends Base
{
    public function create(string $RoomName,string $UserId,string $Message): object
    {
        $message = $this->messageRepository->createMessage($RoomName,$UserId,$Message);
        return $message->toJson();
    }
}
