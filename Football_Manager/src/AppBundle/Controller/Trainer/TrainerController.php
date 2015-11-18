<?php

namespace AppBundle\Controller\Trainer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TrainerController extends Controller
{
    /**
     * @Route("/trainer")
     */
    public function numberAction()
    {
        return new Response(
            '<html><body>Trainer Page</body></html>'
        );
    }
}