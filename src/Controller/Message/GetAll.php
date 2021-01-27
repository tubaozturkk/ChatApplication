<?php
namespace App\Controller\Message;

use Slim\Http\Request;
use Slim\Http\Response;

final class GetAll extends Base
{
    public function __invoke(Request $request, Response $response,array $args): Response
    {
      $RoomName = $args['RoomName'];
      $UserName = $args['UserName'];
      if($RoomName== null){$RoomName = 'AdminRoom';}
      $_SESSION['RoomName'] = $RoomName;
      $message = $this->getFindMessageService()->getAll($RoomName,$UserName);      
      echo json_encode($message);
      return $response;
    }

}
