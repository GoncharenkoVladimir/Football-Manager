<?php

namespace AppBundle\Controller\Player;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity;

class PlayerController extends Controller
{
    /**
     * @Route("/player")
     */
    public function pageAction()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();

        $player = new Entity\Players();
        $player->setName('Vasiliy');

        if (in_array($path, array('', '/player'))) {
            $response = new Response('<html><body><h3 id="title">Welcome to the Player Page</h3></body></html>');
        } else {
            $response = new Response('Page not found.', Response::HTTP_NOT_FOUND);
        }
        return $response;
    }
}