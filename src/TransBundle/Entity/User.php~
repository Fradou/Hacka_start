<?php

namespace TransBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;
    
    /**
     * @var string
     */
    private $native_language;


    /**
     * Set nativeLanguage
     *
     * @param string $nativeLanguage
     *
     * @return User
     */
    public function setNativeLanguage($nativeLanguage)
    {
        $this->native_language = $nativeLanguage;

        return $this;
    }

    /**
     * Get nativeLanguage
     *
     * @return string
     */
    public function getNativeLanguage()
    {
        return $this->native_language;
    }
    /**
     * @var string
     */
    private $first_name;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var string
     */
    private $paypal_account;

    /**
     * @var string
     */
    private $nationality;


    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set paypalAccount
     *
     * @param string $paypalAccount
     *
     * @return User
     */
    public function setPaypalAccount($paypalAccount)
    {
        $this->paypal_account = $paypalAccount;

        return $this;
    }

    /**
     * Get paypalAccount
     *
     * @return string
     */
    public function getPaypalAccount()
    {
        return $this->paypal_account;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return User
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * @var boolean
     */
    private $translator;


    /**
     * Set translator
     *
     * @param boolean $translator
     *
     * @return User
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;

        return $this;
    }

    /**
     * Get translator
     *
     * @return boolean
     */
    public function getTranslator()
    {
        return $this->translator;
    }
    /**
     * @var string
     */
    private $profile_picture;


    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     *
     * @return User
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profile_picture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profile_picture;
    }
    /**
     * @var integer
     */
    private $rating;

    /**
     * @var integer
     */
    private $rate_number;


    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return User
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set rateNumber
     *
     * @param integer $rateNumber
     *
     * @return User
     */
    public function setRateNumber($rateNumber)
    {
        $this->rate_number = $rateNumber;

        return $this;
    }

    /**
     * Get rateNumber
     *
     * @return integer
     */
    public function getRateNumber()
    {
        return $this->rate_number;
    }
}
