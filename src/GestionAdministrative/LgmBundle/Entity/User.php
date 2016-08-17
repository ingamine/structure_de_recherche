<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FKUser738024", columns={"Groupesid"}), @ORM\Index(name="FKUser512253", columns={"structureid"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */


class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", nullable=true)
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
     * @var \Structure
     *
     * @ORM\ManyToOne(targetEntity="Structure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="structureid", referencedColumnName="id")
     * })
     */
    private $structureid;

    /**
     * @var \Groupes
     *
     * @ORM\ManyToOne(targetEntity="Groupes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Groupesid", referencedColumnName="id")
     * })
     */
    private $groupesid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Habilitation", mappedBy="userid")
     */
    private $habilitationid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Mastere", mappedBy="userid")
     */
    private $mastereid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProductionScientifique", mappedBy="userid")
     */
    private $productionScientifiqueid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ResearchTeam", mappedBy="userid")
     */
    private $researchTeamid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="These", mappedBy="userid")
     */
    private $theseid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Soutenance", mappedBy="userid")
     */
    private $soutenanceid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habilitationid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mastereid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productionScientifiqueid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->researchTeamid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->theseid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->soutenanceid = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     *
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
     * @param integer $lastName
     *
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
     * @return integer
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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

    public function getCreated()
    {
        return $this->created;
    }

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
     * Set structureid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Structure $structureid
     *
     * @return User
     */
    public function setStructureid(\GestionAdministrative\LgmBundle\Entity\Structure $structureid = null)
    {
        $this->structureid = $structureid;

        return $this;
    }

    /**
     * Get structureid
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Structure
     */
    public function getStructureid()
    {
        return $this->structureid;
    }

    /**
     * Set groupesid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Groupes $groupesid
     *
     * @return User
     */
    public function setGroupesid(\GestionAdministrative\LgmBundle\Entity\Groupes $groupesid = null)
    {
        $this->groupesid = $groupesid;

        return $this;
    }

    /**
     * Get groupesid
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Groupes
     */
    public function getGroupesid()
    {
        return $this->groupesid;
    }

    /**
     * Add habilitationid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Habilitation $habilitationid
     *
     * @return User
     */
    public function addHabilitationid(\GestionAdministrative\LgmBundle\Entity\Habilitation $habilitationid)
    {
        $this->habilitationid[] = $habilitationid;

        return $this;
    }

    /**
     * Remove habilitationid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Habilitation $habilitationid
     */
    public function removeHabilitationid(\GestionAdministrative\LgmBundle\Entity\Habilitation $habilitationid)
    {
        $this->habilitationid->removeElement($habilitationid);
    }

    /**
     * Get habilitationid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabilitationid()
    {
        return $this->habilitationid;
    }

    /**
     * Add mastereid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Mastere $mastereid
     *
     * @return User
     */
    public function addMastereid(\GestionAdministrative\LgmBundle\Entity\Mastere $mastereid)
    {
        $this->mastereid[] = $mastereid;

        return $this;
    }

    /**
     * Remove mastereid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Mastere $mastereid
     */
    public function removeMastereid(\GestionAdministrative\LgmBundle\Entity\Mastere $mastereid)
    {
        $this->mastereid->removeElement($mastereid);
    }

    /**
     * Get mastereid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMastereid()
    {
        return $this->mastereid;
    }

    /**
     * Add productionScientifiqueid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifiqueid
     *
     * @return User
     */
    public function addProductionScientifiqueid(\GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifiqueid)
    {
        $this->productionScientifiqueid[] = $productionScientifiqueid;

        return $this;
    }

    /**
     * Remove productionScientifiqueid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifiqueid
     */
    public function removeProductionScientifiqueid(\GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifiqueid)
    {
        $this->productionScientifiqueid->removeElement($productionScientifiqueid);
    }

    /**
     * Get productionScientifiqueid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductionScientifiqueid()
    {
        return $this->productionScientifiqueid;
    }

    /**
     * Add researchTeamid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeamid
     *
     * @return User
     */
    public function addResearchTeamid(\GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeamid)
    {
        $this->researchTeamid[] = $researchTeamid;

        return $this;
    }

    /**
     * Remove researchTeamid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeamid
     */
    public function removeResearchTeamid(\GestionAdministrative\LgmBundle\Entity\ResearchTeam $researchTeamid)
    {
        $this->researchTeamid->removeElement($researchTeamid);
    }

    /**
     * Get researchTeamid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResearchTeamid()
    {
        return $this->researchTeamid;
    }

    /**
     * Add theseid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\These $theseid
     *
     * @return User
     */
    public function addTheseid(\GestionAdministrative\LgmBundle\Entity\These $theseid)
    {
        $this->theseid[] = $theseid;

        return $this;
    }

    /**
     * Remove theseid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\These $theseid
     */
    public function removeTheseid(\GestionAdministrative\LgmBundle\Entity\These $theseid)
    {
        $this->theseid->removeElement($theseid);
    }

    /**
     * Get theseid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTheseid()
    {
        return $this->theseid;
    }

    /**
     * Add soutenanceid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Soutenance $soutenanceid
     *
     * @return User
     */
    public function addSoutenanceid(\GestionAdministrative\LgmBundle\Entity\Soutenance $soutenanceid)
    {
        $this->soutenanceid[] = $soutenanceid;

        return $this;
    }

    /**
     * Remove soutenanceid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Soutenance $soutenanceid
     */
    public function removeSoutenanceid(\GestionAdministrative\LgmBundle\Entity\Soutenance $soutenanceid)
    {
        $this->soutenanceid->removeElement($soutenanceid);
    }

    /**
     * Get soutenanceid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoutenanceid()
    {
        return $this->soutenanceid;
    }

    /**
     * toString
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }


}
