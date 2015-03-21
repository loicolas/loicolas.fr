<?php

namespace Loicolas\Bundle\MainBundle\Entity;

use Sonata\CoreBundle\Model\BaseEntityManager;

/**
 * Description of DiplomaManager
 *
 * @author loic
 */
class DiplomaManager extends BaseEntityManager
{
    
    public function getRepository()
    {
        return $this->em->getRepository('LoicolasMainBundle:Diploma');
    }
    
}