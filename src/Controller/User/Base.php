<?php
namespace App\Controller\User;

use App\Controller\BaseController;
use App\Services\User\Create;
use App\Services\User\Find;
use App\Services\User\Login;

abstract class Base extends BaseController
{
    protected function getCreateUserService(): Create
    {
        return $this->container->get('create_user_service');
    }
}
