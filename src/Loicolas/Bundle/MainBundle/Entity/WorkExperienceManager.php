<?php

namespace Loicolas\Bundle\MainBundle\Entity;

use Sonata\CoreBundle\Model\BaseEntityManager;

class WorkExperienceManager extends BaseEntityManager
{
    
    public function getForCV(){
        $criteria = array(
            'active' => true
        );
        
        $order = array(
            'startAt' => 'asc'
        );
        
        return $this->getRepository()->findBy($criteria, $order );
        
    }
    
    public function getRepository()
    {
        return $this->em->getRepository('LoicolasMainBundle:WorkExperience');
    }
    
}
