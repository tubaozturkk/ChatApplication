<?php
use Psr\Container\ContainerInterface;

$container['db'] = static function (ContainerInterface $container): PDO {
    $db = $container->get('settings')['db'];

    $pdo = new PDO('sqlite:../db/ChatApp.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $pdo;
};
