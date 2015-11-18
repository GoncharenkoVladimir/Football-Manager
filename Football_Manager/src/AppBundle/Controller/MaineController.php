<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MaineController extends Controller
{
    /**
     * @Route("/")
     */
    public function numberAction()
    {
        return new Response(
            '<html><body>Home Page</body></html>'
        );
    }
}