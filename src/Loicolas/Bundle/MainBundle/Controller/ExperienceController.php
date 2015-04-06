<?php

namespace Loicolas\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExperienceController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoicolasMainBundle:Experience:index.html.twig');
    }
    
    public function workExperienceAction()
    {
        $workExperienceManager  = $this->get('loicolas_main.work_experience_manager');
        $workExperiences = $workExperienceManager->getForCV();
        
        return $this->render('LoicolasMainBundle:Experience:workExperience.html.twig', array(
            'experiences' => $workExperiences
        ));
    }
}
