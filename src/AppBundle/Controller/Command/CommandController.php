<?php

namespace AppBundle\Controller\Command;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Players;

class CommandController extends Controller
{
    /**
     * @Route("/command", name="command")
     * @Template()
     */
    public function commandAction()
    {

    }
}