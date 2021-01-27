<?php
namespace App\Entity;

use App\Traits\ArrayOrJsonResponse;

final class Message
{
    use ArrayOrJsonResponse;

    private int $MessageId;
    private string $UserId ;
    private string $Message;
    private string $Date;
    private string $RoomName;

    public function getMessageId(): int
    {
        return $this->MessageId;
    }
    public function getUserId(): string
    {
        return $this->UserId;
    }
    public function updateUserId(string $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }
    public function getMessage(): string
    {
        return $this->Message;
    }
    public function updateMessage(string $Message): self
    {
        $this->Message = $Message;

        return $this;
    }
    public function getDate(): string
    {
        return $this->Date;
    }
    public function updateDate(string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
    public function updateRoomName(string $RoomName): self
    {
        $this->RoomName = $RoomName;

        return $this;
    }
    public function getRoomName(): string
    {
        return $this->RoomName;
    }
}
