<?php

namespace StudyApp\FirmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FirmPhone
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FirmPhone
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
     * @ORM\Column(name="firm_id", type="integer")
     */
    private $firm_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="bigint")
     */
    private $phone;

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
     * Set firm_id
     *
     * @param integer $firmId
     * @return FirmPhone
     */
    public function setFirmId($firmId)
    {
        $this->firm_id = $firmId;

        return $this;
    }

    /**
     * Get firm_id
     *
     * @return integer 
     */
    public function getFirmId()
    {
        return $this->firm_id;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return FirmPhone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set is_accepted
     *
     * @param boolean $isAccepted
     * @return FirmPhone
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
     * @return FirmPhone
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
