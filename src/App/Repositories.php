<?php
use App\Repository\UserRepository;
use App\Repository\MessageRepository;
use App\Repository\RoomRepository;
use Psr\Container\ContainerInterface;

$container['user_repository'] = static fn (ContainerInterface $container): UserRepository => new UserRepository($container->get('db'));

$container['message_repository'] = static fn (ContainerInterface $container): MessageRepository => new MessageRepository($container->get('db'));

$container['room_repository'] = static fn (ContainerInterface $container): RoomRepository => new RoomRepository($container->get('db'));
