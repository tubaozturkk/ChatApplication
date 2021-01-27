<?php
namespace App\Controller\Room;

use App\Controller\BaseController;
use App\Services\Room\Create;
use App\Services\Room\Find;

abstract class Base extends BaseController
{
    protected function getCreateRoomService(): Create
    {
        return $this->container->get('create_room_service');
    }
}
