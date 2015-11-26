<?php

namespace AppBundle\Controller\Player;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Players;


class PlayerController extends Controller
{
    /**
     * @Route("/player", name="player")
     * @Template()
     */
    public function playerAction()
    {

        $player = new Players();
        $player->setName('Vasiliy');
        $player->setSecondName('Pupkin');
        $player->setAge(26);
        $player->setCountry('Ukraine');
        $player->setCommand('Dinamo');
        $player->setNumber(7);

        return ['player' => $player];
    }
}