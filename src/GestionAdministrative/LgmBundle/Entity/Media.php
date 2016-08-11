<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media", indexes={@ORM\Index(name="FKmedia744893", columns={"UserId"})})
 * @ORM\Entity
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="date", nullable=false)
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

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Media
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Media
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Media
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
