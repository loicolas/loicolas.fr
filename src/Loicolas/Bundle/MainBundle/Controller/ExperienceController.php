<?php

namespace Loicolas\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExperienceController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoicolasMainBundle:Experience:index.html.twig');
    }
}
