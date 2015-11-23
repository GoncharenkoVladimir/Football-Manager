<?php

namespace AppBundle\Controller\Trainer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainerController extends Controller
{
    /**
     * @Route("/trainer")
     */
    public function pageAction()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();

        if (in_array($path, array('', '/trainer'))) {
            $response = new Response('<html><body><h3 id="title">Welcome to the Trainer Page</h3></body></html>');
        } else {
            $response = new Response('Page not found.', Response::HTTP_NOT_FOUND);
        }
        return $response;
    }
}