<?php

namespace App\Controller\User;

use App\Controller\Base;
use Slim\Http\Request;
use Slim\Http\Response;

class Hello extends Base
{
    /**
     * @param Request  $request
     * @param Response $response
     *
     * @return mixed
     */
    public function execute(Request $request, Response $response)
    {
        $name = $request->getParam('User');
        $array = ['test' => "Hello, $name"];
        return $response->withJson($array, 200);
    }
}
