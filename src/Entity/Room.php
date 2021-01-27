<?php
namespace App\Entity;

use App\Traits\ArrayOrJsonResponse;

final class Room
{
    use ArrayOrJsonResponse;

    private int $RoomId;
    private string $RoomName;

    public function getRoomId(): int
    {
        return $this->RoomId;
    }
    public function getRoomName(): string
    {
        return $this->RoomName;
    }
    public function updateRoomName(string $RoomName): self
    {
        $this->RoomName = $RoomName;

        return $this;
    }
}
