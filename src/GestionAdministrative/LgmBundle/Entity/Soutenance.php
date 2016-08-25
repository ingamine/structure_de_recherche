<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Soutenance
 *
 * @ORM\Table(name="soutenance")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\SoutenanceRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Soutenance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSout", type="date")
     */
    private $dateSout;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=255)
     */
    private $mention;

    /**
     * @var string
     *
     * @ORM\Column(name="jury", type="string", length=255)
     */
    private $jury;

     /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
    
    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;    

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
     * Set dateSout
     *
     * @param \DateTime $dateSout
     * @return Soutenance
     */
    public function setDateSout($dateSout)
    {
        $this->dateSout = $dateSout;

        return $this;
    }

    /**
     * Get dateSout
     *
     * @return \DateTime 
     */
    public function getDateSout()
    {
        return $this->dateSout;
    }

    /**
     * Set mention
     *
     * @param string $mention
     * @return Soutenance
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string 
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set jury
     *
     * @param string $jury
     * @return Soutenance
     */
    public function setJury($jury)
    {
        $this->jury = $jury;

        return $this;
    }

    /**
     * Get jury
     *
     * @return string 
     */
    public function getJury()
    {
        return $this->jury;
    }

  
    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    
    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Soutenance
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

   
    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Soutenance
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Soutenance
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
    
       public function __toString()
    {
        return strval($this->id);
    }

}
