<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Mastere
 *
 * @ORM\Table(name="mastere")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\MastereRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Mastere
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_date_registered", type="date", nullable=true)
     */
    private $firstDateRegistered;
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="GestionAdministrative\LgmBundle\Entity\Etablissement")
     * @ORM\JoinColumn(nullable=false)
     */
    
    
    private $Etablissement;
    
    
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
     * Set title
     *
     * @param string $title
     * @return Mastere
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
     * Set firstDateRegistered
     *
     * @param \DateTime $firstDateRegistered
     * @return Mastere
     */
    public function setFirstDateRegistered($firstDateRegistered)
    {
        $this->firstDateRegistered = $firstDateRegistered;

        return $this;
    }

    /**
     * Get firstDateRegistered
     *
     * @return \DateTime 
     */
    public function getFirstDateRegistered()
    {
        return $this->firstDateRegistered;
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
     * @return Mastere
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

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

    /**
     * Set Etablissement
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement
     * @return Mastere
     */
    public function setEtablissement(\GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement)
    {
        $this->Etablissement = $etablissement;

        return $this;
    }

    /**
     * Get Etablissement
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }
    
    /**
     * toString
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }


    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Mastere
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }
}
