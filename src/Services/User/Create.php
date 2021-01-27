<?php
namespace App\Services\User;

use App\Entity\User;

final class Create extends Base
{
    public function create(array $input): object
    {
        $user = json_decode((string) json_encode($input), false);
        $myuser = new User();
        $myuser->updateUserName($user->UserName);
        $user = $this->userRepository->create($myuser);

        return $user->toJson();
    }
}
