<?php
namespace App\Services\Message;

use App\Entity\Message;
use App\Repository\MessageRepository;
use App\Services\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    protected MessageRepository $messageRepository;

    public function __construct(
        MessageRepository $messageRepository,
    ) {
        $this->messageRepository = $messageRepository;
    }
}
