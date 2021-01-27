<?php
namespace App\Controller\Message;

use Slim\Http\Request;
use Slim\Http\Response;

final class Create extends Base
{
    public function __invoke(Request $request, Response $response): Response
    {
        $RoomName = $request->getParam('RoomName');
        $UserId = $request->getParam('UserId');
        $Message = $request->getParam('Message');
        $message = $this->getCreateMessageService()->create($RoomName,$UserId,$Message);
        $_SESSION['UserName'] = $UserId;
        $_SESSION['RoomName'] = $RoomName;
        header("Location:../view/chat.php");
        die();
        return $this->jsonResponse($response, 'success', $message, 201);
    }
}
