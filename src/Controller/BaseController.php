<?php
namespace App\Controller;

use Slim\Container;
use Slim\Http\Response;

abstract class BaseController
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    protected function jsonResponse(
        Response $response,
        string $status,
        $message,
        int $code
    ): Response {
        $result = [
            'code' => $code,
            'status' => $status,
            'message' => $message,
        ];

        return $response->withJson($result, $code, JSON_PRETTY_PRINT);
    }
}
