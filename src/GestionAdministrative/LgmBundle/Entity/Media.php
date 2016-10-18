<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\MediaRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Media
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
     * @ORM\Column(name="fileName", type="string", length=255)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="GestionAdministrative\LgmBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;
    
    
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
     * Set fileName
     *
     * @param string $fileName
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
     * @return Media
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
     * @return Media
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
     * Set created
     *
     * @param \DateTime $created
     * @return Media
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
     * @return Media
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

    /**
     * @var string
     */
    private $filename;

    /**
     * @var \DateTime
     */
    private $deletedat;

    /**
     * @var \GestionAdministrative\LgmBundle\Entity\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productionscientifique;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productionscientifique = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productionscientifique
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionscientifique
     * @return Media
     */
    public function addProductionscientifique(\GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionscientifique)
    {
        $this->productionscientifique[] = $productionscientifique;

        return $this;
    }

    /**
     * Remove productionscientifique
     *
     * @param \GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionscientifique
     */
    public function removeProductionscientifique(\GestionAdministrative\LgmBundle\Entity\ProductionScientifique $productionscientifique)
    {
        $this->productionscientifique->removeElement($productionscientifique);
    }

    /**
     * Get productionscientifique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductionscientifique()
    {
        return $this->productionscientifique;
    }
}
