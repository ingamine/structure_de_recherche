<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * These
 *
 * @ORM\Table(name="these")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\TheseRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class These
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
     * Set title
     *
     * @param string $title
     * @return These
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
     * @return These
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
     * @return These
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

  
    /**
     * Set Etablissement
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement
     * @return These
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return These
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
        return $this->getTitle();
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return These
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
}
