<?php

namespace StudyApp\FirmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Firm
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Firm
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="building_id", type="integer")
     */
    private $building_id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $is_deleted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_accepted", type="boolean")
     */
    private $is_accepted;


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
     * Set name
     *
     * @param string $name
     * @return Firm
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
     * Set building_id
     *
     * @param integer $buildingId
     * @return Firm
     */
    public function setBuildingId($buildingId)
    {
        $this->building_id = $buildingId;

        return $this;
    }

    /**
     * Get building_id
     *
     * @return integer 
     */
    public function getBuildingId()
    {
        return $this->building_id;
    }

    /**
     * Set is_deleted
     *
     * @param boolean $isDeleted
     * @return Firm
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

    /**
     * Set is_accepted
     *
     * @param boolean $isAccepted
     * @return Firm
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
}
