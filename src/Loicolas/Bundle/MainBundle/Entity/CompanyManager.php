<?php

namespace Loicolas\Bundle\MainBundle\Entity;

use Sonata\CoreBundle\Model\BaseEntityManager;

/**
 * Description of CompanyManager
 *
 * @author loic
 */
class CompanyManager extends BaseEntityManager
{
    
    public function getRepository()
    {
        return $this->em->getRepository('LoicolasMainBundle:Company');
    }
    
}