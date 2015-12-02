<?php

namespace StudyApp\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Region
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
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $country_id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_accepted", type="boolean")
     */
    private $is_accepted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $is_deleted;


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
     * Set country_id
     *
     * @param integer $countryId
     * @return Region
     */
    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;

        return $this;
    }

    /**
     * Get country_id
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Region
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set is_accepted
     *
     * @param boolean $isAccepted
     * @return Region
     */
    public function setIsAccepted($isAccepted)
    {
        $this->is_accepted = $isAccepted;

        return $this;
    }

    /**
     * Get is_accepted
     *
     * @return boolean 
     */
    public function getIsAccepted()
    {
        return $this->is_accepted;
    }

    /**
     * Set is_deleted
     *
     * @param boolean $isDeleted
     * @return Region
     */
    public function setIsDeleted($isDeleted)
    {
        $this->is_deleted = $isDeleted;

        return $this;
    }

    /**
     * Get is_deleted
     *
     * @return boolean 
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }
}
