<?php

namespace Loicolas\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * WorkExperience
 *
 * @ORM\Table(name="loicolas__work_experience")
 * @ORM\Entity(repositoryClass="Loicolas\Bundle\MainBundle\Entity\WorkExperienceRepository")
 */
class WorkExperience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="title", type="string", length=255)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Loicolas\Bundle\MainBundle\Entity\Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $company;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank
     * @ORM\Column(name="start_at", type="date")
     */
    protected $startAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_at", type="date", nullable=true)
     */
    protected $endAt;

    /**
     * @var string
     *
     * @ORM\Column(name="missions", type="text", nullable=true)
     */
    protected $missions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    protected $active;

    
    function __construct() 
    {
        $this->active = true;
    }

        /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return WorkExperience
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set company
     *
     * @param Loicolas\Bundle\MainBundle\Entity\Company $company
     * @return WorkExperience
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return Loicolas\Bundle\MainBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set startAt
     *
     * @param \DateTime $startAt
     * @return WorkExperience
     */
    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;

        return $this;
    }

    /**
     * Get startAt
     *
     * @return \DateTime 
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return WorkExperience
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set missions
     *
     * @param string $missions
     * @return WorkExperience
     */
    public function setMissions($missions)
    {
        $this->missions = $missions;

        return $this;
    }

    /**
     * Get missions
     *
     * @return string 
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return WorkExperience
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
    
    public function __toString() {
        return $this->getTitle() ? : '-';
    }
}
