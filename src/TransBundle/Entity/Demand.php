<?php

namespace TransBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demand
 */
class Demand
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $situation;

    /**
     * @var string
     */
    private $situationTitle;


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
     * Set language
     *
     * @param string $language
     * @return Demand
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Demand
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set situation
     *
     * @param string $situation
     * @return Demand
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string 
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set situationTitle
     *
     * @param string $situationTitle
     * @return Demand
     */
    public function setSituationTitle($situationTitle)
    {
        $this->situationTitle = $situationTitle;

        return $this;
    }

    /**
     * Get situationTitle
     *
     * @return string 
     */
    public function getSituationTitle()
    {
        return $this->situationTitle;
    }
}
