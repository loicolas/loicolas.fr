<?php

namespace Loicolas\Bundle\MainBundle\Entity;

use Sonata\CoreBundle\Model\BaseEntityManager;

class WorkExperienceManager extends BaseEntityManager
{
    
    public function getRepository()
    {
        return $this->em->getRepository('LoicolasMainBundle:WorkExperience');
    }
    
}
