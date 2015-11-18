<?php

namespace AppBundle\Controller\Player;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends Controller
{
    /**
     * @Route("/player")
     */
    public function pageAction()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();

        if (in_array($path, array('', '/player'))) {
            $response = new Response('<html><body>Welcome to the Player Page</body></html>');
        } else {
            $response = new Response('Page not found.', Response::HTTP_NOT_FOUND);
        }
        return $response;
    }
}