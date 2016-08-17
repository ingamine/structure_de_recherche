<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Mastere
 *
 * @ORM\Table(name="mastere", indexes={@ORM\Index(name="FKMastere631585", columns={"etablissementid"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Mastere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
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
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etablissementid", referencedColumnName="id")
     * })
     */
    private $etablissementid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="mastereid")
     * @ORM\JoinTable(name="mastere_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Mastereid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     *   }
     * )
     */
    private $userid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
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
     * @param string $firstDateRegistered
     *
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
     * @return string
     */
    public function getFirstDateRegistered()
    {
        return $this->firstDateRegistered;
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
     * @return Mastere
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
        return $this;
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
     * Set etablissementid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Etablissement $etablissementid
     *
     * @return Mastere
     */
    public function setEtablissementid(\GestionAdministrative\LgmBundle\Entity\Etablissement $etablissementid = null)
    {
        $this->etablissementid = $etablissementid;

        return $this;
    }

    /**
     * Get etablissementid
     *
     * @return \GestionAdministrative\LgmBundle\Entity\Etablissement
     */
    public function getEtablissementid()
    {
        return $this->etablissementid;
    }

    /**
     * Add userid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $userid
     *
     * @return Mastere
     */
    public function addUserid(\GestionAdministrative\LgmBundle\Entity\User $userid)
    {
        $this->userid[] = $userid;

        return $this;
    }

    /**
     * Remove userid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $userid
     */
    public function removeUserid(\GestionAdministrative\LgmBundle\Entity\User $userid)
    {
        $this->userid->removeElement($userid);
    }

    /**
     * Get userid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
