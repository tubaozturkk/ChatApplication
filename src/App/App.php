<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
$settings = require __DIR__ . '/Settings.php';
$app = new \Slim\App($settings);
$container = $app->getContainer();
require __DIR__ . '/Dependencies.php';
require __DIR__ . '/Services.php';
require __DIR__ . '/Repositories.php';
require __DIR__ . '/Routes.php';
require __DIR__ . '/Settings.php';
