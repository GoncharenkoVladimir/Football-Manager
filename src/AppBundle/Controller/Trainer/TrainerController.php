<?php

namespace AppBundle\Controller\Trainer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Controller\Trainer;

class TrainerController extends Controller
{
    /**
     * @Route("/trainer", name="trainer")
     * @Template()
     */
    public function trainerAction()
    {

    }
}