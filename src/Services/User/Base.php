<?php
namespace App\Services\User;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    protected UserRepository $userRepository;

    public function __construct(
        UserRepository $userRepository
    ) {
        $this->userRepository = $userRepository;
    }
}
