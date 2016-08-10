<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mastere
 *
 * @ORM\Table(name="mastere", indexes={@ORM\Index(name="FKMastere631585", columns={"etablissementid"})})
 * @ORM\Entity
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
     * @var string
     *
     * @ORM\Column(name="first_date_registered", type="string", length=255, nullable=true)
     */
    private $firstDateRegistered;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $created_at;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="updated_at ", type="date", nullable=false)
     */
    private $updated_at ;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="deleted_at", type="date", nullable=false)
     */
    private $deleted_at;

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
