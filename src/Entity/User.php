<?php
namespace App\Entity;

use App\Traits\ArrayOrJsonResponse;

final class User
{
    use ArrayOrJsonResponse;

    private int $UserId;
    private string $UserName;

    public function getUserId(): int
    {
        return $this->UserId;
    }
    public function getUserName(): string
    {
        return $this->UserName;
    }
    public function updateUserName(string $UserName): self
    {
        $this->UserName = $UserName;

        return $this;
    }
}
