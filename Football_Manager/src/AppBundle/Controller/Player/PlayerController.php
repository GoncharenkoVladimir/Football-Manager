<?php

namespace AppBundle\Controller\Player;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends Controller
{
    /**
     * @Route("/player")
     */
    public function numberAction()
    {
        return new Response(
            '<html><body>Player Page</body></html>'
        );
    }
}