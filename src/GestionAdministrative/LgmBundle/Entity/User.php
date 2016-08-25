<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\UserRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class User
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
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;
    
    /**
     * @var string 
     * 
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */

    private $gender;

    /**
     * @var string $birthday
     *
     * @ORM\Column(name="birthday", type="datetime", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_place", type="string", length=255, nullable=true)
     */
    private $birthPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255, nullable=true)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", length=255, nullable=true)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=255, nullable=true)
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_id", type="string", length=255, nullable=true)
     */
    private $photoId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="directeur", type="boolean", nullable=true)
     */
    private $directeur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="co_directeur", type="boolean", nullable=true)
     */
    private $coDirecteur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="effectue", type="boolean", nullable=true)
     */
    private $effectue;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="integer", nullable=true)
     */
    private $mediaId;

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
   * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\Habilitation", cascade={"persist"})
   */
    
    private $habilitation;
    
   /**
   * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\These", cascade={"persist"})
   */
    
    private $These;
        
   /**
   * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\Mastere", cascade={"persist"})
   */
    
    private $Mastere;
    
   /**
   * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\Soutenance", cascade={"persist"})
   */
    
    private $Soutenance;
    
   /**
   * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\ProductionScientifique", cascade={"persist"})
   */
    
    private $ProductionScientifique;
   
   /**
   * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\ResearchTeam", cascade={"persist"})
   */
    
    private $ResearchTeam;
    
     /**
     * @ORM\ManyToOne(targetEntity="GestionAdministrative\LgmBundle\Entity\Structure")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Structure;
    
    
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
     * @return User
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
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthPlace
     *
     * @param string $birthPlace
     * @return User
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Get birthPlace
     *
     * @return string 
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return User
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return User
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set documentId
     *
     * @param string $documentId
     * @return User
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Get documentId
     *
     * @return string 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set photoId
     *
     * @param string $photoId
     * @return User
     */
    public function setPhotoId($photoId)
    {
        $this->photoId = $photoId;

        return $this;
    }

    /**
     * Get photoId
     *
     * @return string 
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set directeur
     *
     * @param boolean $directeur
     * @return User
     */
    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return boolean 
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }

    /**
     * Set coDirecteur
     *
     * @param boolean $coDirecteur
     * @return User
     */
    public function setCoDirecteur($coDirecteur)
    {
        $this->coDirecteur = $coDirecteur;

        return $this;
    }

    /**
     * Get coDirecteur
     *
     * @return boolean 
     */
    public function getCoDirecteur()
    {
        return $this->coDirecteur;
    }

    /**
     * Set effectue
     *
     * @param boolean $effectue
     * @return User
     */
    public function setEffectue($effectue)
    {
        $this->effectue = $effectue;

        return $this;
    }

    /**
     * Get effectue
     *
     * @return boolean 
     */
    public function getEffectue()
    {
        return $this->effectue;
    }

    /**
     * Set mediaId
     *
     * @param integer $mediaId
     * @return User
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return integer 
     */
    public function getMediaId()
    {
        return $this->mediaId;
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
     * @param string $deletedAt
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

 
   
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habilitations = new \Doctrine\Common\Collections\ArrayCollection();
    }

         
   

    /**
     * Get habilitation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHabilitation()
    {
        return $this->habilitation;
    }

 
    /**
     * Add These
     *
     * @param \GestionAdministrative\LgmBundle\Entity\These $these
     * @return User
     */
    public function addThese(\GestionAdministrative\LgmBundle\Entity\These $these)
    {
        $this->These[] = $these;

        return $this;
    }

    /**
     * Remove These
     *
     * @param \GestionAdministrative\LgmBundle\Entity\These $these
     */
    public function removeThese(\GestionAdministrative\LgmBundle\Entity\These $these)
    {
        $this->These->removeElement($these);
    }

    /**
     * Get These
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getThese()
    {
        return $this->These;
    }

    /**
     * Add Mastere
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Mastere $mastere
     * @return User
     */
    public function addMastere(\GestionAdministrative\LgmBundle\Entity\Mastere $mastere)
    {
        $this->Mastere[] = $mastere;

        return $this;
    }

    /**
     * Remove Mastere
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Mastere $mastere
     */
    public function removeMastere(\GestionAdministrative\LgmBundle\Entity\Mastere $mastere)
    {
        $this->Mastere->removeElement($mastere);
    }

    /**
     * Get Mastere
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMastere()
    {
        return $this->Mastere;
    }

    /**
     * Add Soutenance
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Soutenance $soutenance
     * @return User
     */
    public function addSoutenance(\GestionAdministrative\LgmBundle\Entity\Soutenance $soutenance)
    {
        $this->Soutenance[] = $soutenance;

        return $this;
    }

    /**
     * Remove Soutenance
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Soutenance $soutenance
     */
    public function removeSoutenance(\GestionAdministrative\LgmBundle\Entity\Soutenance $soutenance)
    {
        $this->Soutenance->removeElement($soutenance);
    }

    /**
     * Get Soutenance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSoutenance()
    {
        return $this->Soutenance;
    }

    /**
     * Add ProductionScientifique
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifique
     * @return User
     */
    public function addProductionScientifique(\GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifique)
    {
        $this->ProductionScientifique[] = $productionScientifique;

        return $this;
    }

    /**
     * Remove ProductionScientifique
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifique
     */
    public function removeProductionScientifique(\GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifique)
    {
        $this->ProductionScientifique->removeElement($productionScientifique);
    }

    /**
     * Get ProductionScientifique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductionScientifique()
    {
        return $this->ProductionScientifique;
    }

    /**
     * Add ResearchTeam
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeam
     * @return User
     */
    public function addResearchTeam(\GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeam)
    {
        $this->ResearchTeam[] = $researchTeam;

        return $this;
    }

    /**
     * Remove ResearchTeam
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeam
     */
    public function removeResearchTeam(\GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeam)
    {
        $this->ResearchTeam->removeElement($researchTeam);
    }

    /**
     * Get ResearchTeam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResearchTeam()
    {
        return $this->ResearchTeam;
    }

    /**
     * Set Structure
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Structure $structure
     * @return User
     */
    public function setStructure(\GestionAdministrative\LgmBundle\Entity\Structure $structure)
    {
        $this->Structure = $structure;

        return $this;
    }

    /**
     * Get Structure
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Structure 
     */
    public function getStructure()
    {
        return $this->Structure;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @return User
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

  

    /**
     * Add habilitation
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Habilitation $habilitation
     * @return User
     */
    public function addHabilitation(\GestionAdministrative\LgmBundle\Entity\Habilitation $habilitation)
    {
        $this->habilitation[] = $habilitation;

        return $this;
    }

    /**
     * Remove habilitation
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Habilitation $habilitation
     */
    public function removeHabilitation(\GestionAdministrative\LgmBundle\Entity\Habilitation $habilitation)
    {
        $this->habilitation->removeElement($habilitation);
    }
    
      public function __toString()
    {
        return strval($this->id);
    }
    
    
}
