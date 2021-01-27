<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
$app = new \Slim\App;
session_start();
require __DIR__ . '/../src/App/App.php';
$app->run();
