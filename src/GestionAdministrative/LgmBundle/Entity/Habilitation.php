<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habilitation
 *
 * @ORM\Table(name="habilitation", indexes={@ORM\Index(name="FKHabilitati713759", columns={"etablissementid"})})
 * @ORM\Entity
 */
class Habilitation
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
     * @var string
     *
     * @ORM\Column(name="directeur", type="string", length=255, nullable=true)
     */
    private $directeur;

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
     * @ORM\ManyToMany(targetEntity="User", inversedBy="habilitationid")
     * @ORM\JoinTable(name="habilitation_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Habilitationid", referencedColumnName="id")
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
     * @return Habilitation
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
     *
     * @return Habilitation
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
     * Set directeur
     *
     * @param string $directeur
     *
     * @return Habilitation
     */
    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return string
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }

    /**
     * Set etablissementid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Etablissement $etablissementid
     *
     * @return Habilitation
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
     * @return Habilitation
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
