<?php
namespace App\Services\Message;

final class Find extends Base
{
  public function getAll(string $input,string $input2): array
  {
      return $this->messageRepository->getMessage($input,$input2);
  }
}
