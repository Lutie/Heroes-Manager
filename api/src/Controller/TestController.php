<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api")
 */
class TestController extends AbstractController
{
    /**
     * @Route("/version", schemes={"https"})
     */
    public function versionAction()
    {
        $response = new Response(json_encode([
            'version' => '0.1'
        ]));
        $response->headers->add([
            'Content-Type' => 'application/json',
            'Access-Control-Allow-Origin' => '*'
        ]);
        return $response;
    }

    /**
     * @Route("/version2")
     */
    public function version2Action()
    {
        $response = new Response(json_encode([
            'version' => '0.1'
        ]));
        $response->headers->add([
            'Content-Type' => 'application/json',
            'Access-Control-Allow-Origin' => '*'
        ]);
        return $response;
    }

}