<?php
namespace App\Controller\User;

use Slim\Http\Request;
use Slim\Http\Response;

final class Create extends Base
{
    public function __invoke(Request $request, Response $response): Response
    {
        $input = (array) $request->getParsedBody();
        $user = $this->getCreateUserService()->create($input);
        $RoomName = $request->getParam('RoomName');
        $UserName = $request->getParam('UserName');
        $_SESSION['UserName'] = $UserName;
        $_SESSION['RoomName'] = $RoomName;
        header("Location:../view/roomlogin.php");
        die();
        return $this->jsonResponse($response, 'success', $user, 201);
    }
}
