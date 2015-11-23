<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MaineController extends Controller
{
    /**
     * @Route("/")
     */
    public function pageAction()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();
        $template = '<html>
                        <body>
                            <h2>Welcome to the Home Page</h2>
                            <ul>
                                <li><a href="http://footballmanager.com/app_dev.php/command">Command Page</a></li>
                                <li><a href="http://footballmanager.com/app_dev.php/player">Player Page</a></li>
                                <li><a href="http://footballmanager.com/app_dev.php/trainer">Trainer Page</a></li>
                                <li><a href="http://footballmanager.com/app_dev.php/country">Country Page</a></li>
                            </ul>
                        </body>
                    </html>';
        if (in_array($path, array('', '/'))) {
            $response = new Response($template);
        } else {
            $response = new Response('Page not found.', Response::HTTP_NOT_FOUND);
        }
        return $response;
    }
}