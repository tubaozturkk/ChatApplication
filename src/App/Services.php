<?php
use App\Services\Message;
use App\Services\Room;
use App\Services\User;
use Psr\Container\ContainerInterface;

$container['create_user_service'] = static fn (ContainerInterface $container): User\Create => new User\Create(
    $container->get('user_repository')
);
$container['find_message_service'] = static fn (ContainerInterface $container): Message\Find => new Message\Find(
    $container->get('message_repository')
);
$container['create_message_service'] = static fn (ContainerInterface $container): Message\Create => new Message\Create(
    $container->get('message_repository')
);
$container['create_room_service'] = static fn (ContainerInterface $container): Room\Create => new Room\Create(
    $container->get('room_repository')
);
