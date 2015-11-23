<?php

namespace AppBundle\Controller\Command;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommandController extends Controller
{
    /**
     * @Route("/command")
     */
    public function pageAction()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();

        if (in_array($path, array('', '/command'))) {
            $response = new Response('<html><body><h3 id="title">Welcome to the Command Page</h3></body></html>');
        } else {
            $response = new Response('Page not found.', Response::HTTP_NOT_FOUND);
        }
        return $response;
    }
}