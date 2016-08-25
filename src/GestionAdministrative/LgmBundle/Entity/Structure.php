<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Structure
 *
 * @ORM\Table(name="structure")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\StructureRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Structure
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nomChef", type="string", length=255)
     */
    private $nomChef;

     /**
     * @var string
     *
     * @ORM\Column(name="prenom_chef", type="string", length=255, nullable=true)
     */
    private $prenomChef;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_chef", type="integer", nullable=true)
     */
    private $cinChef;

    /**
     * @var string
     *
     * @ORM\Column(name="universite", type="string", length=255, nullable=true)
     */
    private $universite;

    /**
     * @var string
     *
     * @ORM\Column(name="web_site", type="string", length=255, nullable=true)
     */
    private $webSite;
    
        
    /**
     * @ORM\ManyToOne(targetEntity="GestionAdministrative\LgmBundle\Entity\Etablissement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Etablissement;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;
  
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
     * Set name
     *
     * @param string $name
     * @return Structure
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
     * Set nomChef
     *
     * @param string $nomChef
     * @return Structure
     */
    public function setNomChef($nomChef)
    {
        $this->nomChef = $nomChef;

        return $this;
    }

    /**
     * Get nomChef
     *
     * @return string 
     */
    public function getNomChef()
    {
        return $this->nomChef;
    }

    /**
     * Set prenomChef
     *
     * @param string $prenomChef
     * @return Structure
     */
    public function setPrenomChef($prenomChef)
    {
        $this->prenomChef = $prenomChef;

        return $this;
    }

    /**
     * Get prenomChef
     *
     * @return string 
     */
    public function getPrenomChef()
    {
        return $this->prenomChef;
    }

    /**
     * Set cinChef
     *
     * @param integer $cinChef
     * @return Structure
     */
    public function setCinChef($cinChef)
    {
        $this->cinChef = $cinChef;

        return $this;
    }

    /**
     * Get cinChef
     *
     * @return integer 
     */
    public function getCinChef()
    {
        return $this->cinChef;
    }

    /**
     * Set universite
     *
     * @param string $universite
     * @return Structure
     */
    public function setUniversite($universite)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return string 
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set webSite
     *
     * @param string $webSite
     * @return Structure
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;

        return $this;
    }

    /**
     * Get webSite
     *
     * @return string 
     */
    public function getWebSite()
    {
        return $this->webSite;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Structure
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
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
     * @return Structure
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    
    /**
     * Set User
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $user
     * @return Structure
     */
    public function setUser(\GestionAdministrative\LgmBundle\Entity\User $user)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \GestionAdministrative\LgmBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
    
   
    /**
     * Set Etablissement
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Etablissement $etablissement
     * @return Structure
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
     * Set created
     *
     * @param \DateTime $created
     * @return Structure
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
     * @return Structure
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
