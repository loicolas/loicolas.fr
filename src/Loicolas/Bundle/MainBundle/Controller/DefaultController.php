<?php

namespace Loicolas\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoicolasMainBundle:Default:index.html.twig', array());
    }
}
