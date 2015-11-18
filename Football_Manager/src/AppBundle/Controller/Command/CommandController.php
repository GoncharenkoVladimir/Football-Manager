<?php

namespace AppBundle\Controller\Command;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CommandController extends Controller
{
    /**
     * @Route("/command")
     */
    public function numberAction()
    {
        return new Response(
            '<html><body>Command Page</body></html>'
        );
    }
}