<?php
namespace App\Services\Room;

use App\Entity\Room;

final class Create extends Base
{
    public function create(array $input): object
    {
        $room = json_decode((string) json_encode($input), false);
        $myroom = new Room();
        $myroom->updateRoomName($room->RoomName);
        $room = $this->roomRepository->createRoom($myroom);
        return $room->toJson();
    }
}
