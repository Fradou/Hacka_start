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
    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $languageNeeded;

    /**
     * @var string
     */
    private $languageSpoken;

    /**
     * @var string
     */
    private $institutionInvolved;

    /**
     * @var string
     */
    private $institutionName;


    /**
     * Set location
     *
     * @param string $location
     *
     * @return Demand
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set languageNeeded
     *
     * @param string $languageNeeded
     *
     * @return Demand
     */
    public function setLanguageNeeded($languageNeeded)
    {
        $this->languageNeeded = $languageNeeded;

        return $this;
    }

    /**
     * Get languageNeeded
     *
     * @return string
     */
    public function getLanguageNeeded()
    {
        return $this->languageNeeded;
    }

    /**
     * Set languageSpoken
     *
     * @param string $languageSpoken
     *
     * @return Demand
     */
    public function setLanguageSpoken($languageSpoken)
    {
        $this->languageSpoken = $languageSpoken;

        return $this;
    }

    /**
     * Get languageSpoken
     *
     * @return string
     */
    public function getLanguageSpoken()
    {
        return $this->languageSpoken;
    }

    /**
     * Set institutionInvolved
     *
     * @param string $institutionInvolved
     *
     * @return Demand
     */
    public function setInstitutionInvolved($institutionInvolved)
    {
        $this->institutionInvolved = $institutionInvolved;

        return $this;
    }

    /**
     * Get institutionInvolved
     *
     * @return string
     */
    public function getInstitutionInvolved()
    {
        return $this->institutionInvolved;
    }

    /**
     * Set institutionName
     *
     * @param string $institutionName
     *
     * @return Demand
     */
    public function setInstitutionName($institutionName)
    {
        $this->institutionName = $institutionName;

        return $this;
    }

    /**
     * Get institutionName
     *
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->institutionName;
    }
    /**
     * @var integer
     */
    private $translator;

    /**
     * @var integer
     */
    private $applicant;


    /**
     * Set translator
     *
     * @param integer $translator
     *
     * @return Demand
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;

        return $this;
    }

    /**
     * Get translator
     *
     * @return integer
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * Set applicant
     *
     * @param integer $applicant
     *
     * @return Demand
     */
    public function setApplicant($applicant)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return integer
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
