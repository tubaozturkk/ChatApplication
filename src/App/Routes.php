<?php
use App\Controller\User;
use App\Controller\Room;
use App\Controller\Message;

$app->post('/login',\App\Controller\User\Create::class);
$app->post('/loginroom',\App\Controller\Room\Create::class);
$app->post('/sendmessage',\App\Controller\Message\Create::class);
$app->get('/messages/{RoomName}/{UserName}',\App\Controller\Message\GetAll::class);
