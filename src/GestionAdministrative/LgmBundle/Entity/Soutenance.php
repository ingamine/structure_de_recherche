<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soutenance
 *
 * @ORM\Table(name="soutenance")
 * @ORM\Entity
 */
class Soutenance
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_sout", type="date", nullable=true)
     */
    private $dateSout;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=255, nullable=true)
     */
    private $mention;

    /**
     * @var string
     *
     * @ORM\Column(name="jury", type="string", length=255, nullable=true)
     */
    private $jury;
    
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="soutenanceid")
     * @ORM\JoinTable(name="user_soutenance",
     *   joinColumns={
     *     @ORM\JoinColumn(name="soutenanceid", referencedColumnName="id")
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
     * Set dateSout
     *
     * @param \DateTime $dateSout
     *
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
     *
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
     *
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
     * Add userid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $userid
     *
     * @return Soutenance
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
