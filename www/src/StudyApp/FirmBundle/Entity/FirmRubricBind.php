<?php

namespace StudyApp\FirmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FirmRubricBind
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FirmRubricBind
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
     * @ORM\Column(name="rubric_id", type="integer")
     */
    private $rubric_id;

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
     * @return FirmRubricBind
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
     * Set rubric_id
     *
     * @param integer $rubricId
     * @return FirmRubricBind
     */
    public function setRubricId($rubricId)
    {
        $this->rubric_id = $rubricId;

        return $this;
    }

    /**
     * Get rubric_id
     *
     * @return integer 
     */
    public function getRubricId()
    {
        return $this->rubric_id;
    }

    /**
     * Set is_accepted
     *
     * @param boolean $isAccepted
     * @return FirmRubricBind
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
     * @return FirmRubricBind
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
