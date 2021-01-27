<?php
namespace App\Controller\Message;

use App\Controller\BaseController;
use App\Services\Message\Create;
use App\Services\Message\Find;

abstract class Base extends BaseController
{
    protected function getFindMessageService(): Find
    {
        return $this->container->get('find_message_service');
    }
    protected function getCreateMessageService(): Create
    {
        return $this->container->get('create_message_service');
    }
}
