<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResearchTeam
 *
 * @ORM\Table(name="research_team")
 * @ORM\Entity
 */
class ResearchTeam
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="production_index", type="integer", nullable=true)
     */
    private $productionIndex;
    
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
     * @ORM\ManyToMany(targetEntity="User", inversedBy="researchTeamid")
     * @ORM\JoinTable(name="research_team_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Research_teamid", referencedColumnName="id")
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
     * Set name
     *
     * @param string $name
     *
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
     *
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
     * Add userid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $userid
     *
     * @return ResearchTeam
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
