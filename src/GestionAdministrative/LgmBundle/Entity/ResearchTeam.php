<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * ResearchTeam
 *
 * @ORM\Table(name="research_team")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ResearchTeamRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class ResearchTeam
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
     * @var integer
     *
     * @ORM\Column(name="production_index", type="integer", nullable=true)
     */
    private $productionIndex;
    
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
     * @return ResearchTeam
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
     * Set productionIndex
     *
     * @param integer $productionIndex
     * @return ResearchTeam
     */
    public function setProductionIndex($productionIndex)
    {
        $this->productionIndex = $productionIndex;

        return $this;
    }

    /**
     * Get productionIndex
     *
     * @return integer 
     */
    public function getProductionIndex()
    {
        return $this->productionIndex;
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
     * @return ResearchTeam
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
     * toString
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
    

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return ResearchTeam
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
     * @return ResearchTeam
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }
}
