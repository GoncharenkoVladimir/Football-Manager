<?php

namespace AppBundle\Controller\Command;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Commands;

class CommandController extends Controller
{
    /**
     * @Route("/command/{country}")
     * @Template()
     */
    public function commandAction($country)
    {
        if ($country == 'cheh')
        {
            $command = new Commands();
            $command->setName('Чехия');
        }
        return ['command' => $command];
    }
}