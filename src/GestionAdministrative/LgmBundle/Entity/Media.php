<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Media
 *
 * @ORM\Table(name="media", indexes={@ORM\Index(name="FKmedia744893", columns={"UserId"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Media
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
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     * })
     */
    private $userid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProductionScientifique", inversedBy="mediaid")
     * @ORM\JoinTable(name="production_scientifique_media",
     *   joinColumns={
     *     @ORM\JoinColumn(name="mediaid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Production_scientifiqueid", referencedColumnName="id")
     *   }
     * )
     */
    private $productionScientifiqueid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productionScientifiqueid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return Media
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
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
     * @return Groupes
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
     * Set userid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $userid
     *
     * @return Media
     */
    public function setUserid(\GestionAdministrative\LgmBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \GestionAdministrative\LgmBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Add productionScientifiqueid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionScientifiqueid
     *
     * @return Media
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
}
