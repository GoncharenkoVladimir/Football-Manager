<?php

namespace AppBundle\Controller\Country;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends Controller
{
    /**
     * @Route("/country")
     */
    public function numberAction()
    {
        return new Response(
            '<html><body>Country Page</body></html>'
        );
    }
}