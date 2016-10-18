<?php
namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;



/**
 * User
 *
 * @ORM\Table(name="communication")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\CommunicationRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */

class Communication
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
     * @ORM\Column(name="equipe", type="string", length=255)
     */
    private $equipe;

    /**
     * @var string
     *
     * @ORM\Column(name="a1", type="string", length=255)
     */
    private $a1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a2", type="string", length=255)
     */
    
    private $a2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a3", type="string", length=255)
     */
    private $a3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a4", type="string", length=255)
     */
    private $a4;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a5", type="string", length=255)
     */
    private $a5;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a6", type="string", length=255)
     */
    private $a6;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a7", type="string", length=255)
     */
    private $a7;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a8", type="string", length=255)
     */
    private $a8;
    
    /**
     * @var string
     *
     * @ORM\Column(name="a9", type="string", length=255)
     */
    private $a9;
    
   /**
     * @var string
     *
     * @ORM\Column(name="a10", type="string", length=255)
     */
    private $a10;

    /**
     * @var string
     *
     * @ORM\Column(name="conferance", type="string", length=255)
     */
    private $conferance;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="vol", type="string", length=255)
     */
    private $vol;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=255)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="pp", type="string", length=255)
     */
    private $pp;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
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
     * 
     * @ORM\ManyToOne(targetEntity="GestionAdministrative\LgmBundle\Entity\ResearchTeam")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $ResearchTeam;
    
    
    
    
    
    
    
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
     * Set equipe
     *
     * @param string $equipe
     * @return Communication
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return string 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set a1
     *
     * @param string $a1
     * @return Communication
     */
    public function setA1($a1)
    {
        $this->a1 = $a1;

        return $this;
    }

    /**
     * Get a1
     *
     * @return string 
     */
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * Set a2
     *
     * @param string $a2
     * @return Communication
     */
    public function setA2($a2)
    {
        $this->a2 = $a2;

        return $this;
    }

    /**
     * Get a2
     *
     * @return string 
     */
    public function getA2()
    {
        return $this->a2;
    }

    /**
     * Set a3
     *
     * @param string $a3
     * @return Communication
     */
    public function setA3($a3)
    {
        $this->a3 = $a3;

        return $this;
    }

    /**
     * Get a3
     *
     * @return string 
     */
    public function getA3()
    {
        return $this->a3;
    }
    
    /**
     * Set a4
     *
     * @param string $a4
     * @return Communication
     */
    public function setA4($a4)
    {
        $this->a4 = $a4;

        return $this;
    }

    /**
     * Get a4
     *
     * @return string 
     */
    public function getA4()
    {
        return $this->a4;
    }
    
    /**
     * Set a5
     *
     * @param string $a5
     * @return Communication
     */
    public function setA5($a5)
    {
        $this->a5 = $a5;

        return $this;
    }

    /**
     * Get a5
     *
     * @return string 
     */
    public function getA5()
    {
        return $this->a5;
    }
    
    /**
     * Set a6
     *
     * @param string $a6
     * @return Communication
     */
    public function setA6($a6)
    {
        $this->a6 = $a6;

        return $this;
    }

    /**
     * Get a6
     *
     * @return string 
     */
    public function getA6()
    {
        return $this->a6;
    }
    
    /**
     * Set a7
     *
     * @param string $a7
     * @return Communication
     */
    public function setA7($a7)
    {
        $this->a7 = $a7;

        return $this;
    }

    /**
     * Get a7
     *
     * @return string 
     */
    public function getA7()
    {
        return $this->a7;
    }
    
    /**
     * Set a8
     *
     * @param string $a8
     * @return Communication
     */
    public function setA8($a8)
    {
        $this->a8 = $a8;

        return $this;
    }

    /**
     * Get a8
     *
     * @return string 
     */
    public function getA8()
    {
        return $this->a8;
    }
    
    /**
     * Set a9
     *
     * @param string $a9
     * @return Communication
     */
    public function setA9($a9)
    {
        $this->a9 = $a9;

        return $this;
    }

    /**
     * Get a9
     *
     * @return string 
     */
    public function getA9()
    {
        return $this->a9;
    }
    
    /**
     * Set a10
     *
     * @param string $a10
     * @return Communication
     */
    public function setA10($a10)
    {
        $this->a10 = $a10;

        return $this;
    }

    /**
     * Get a10
     *
     * @return string 
     */
    public function getA10()
    {
        return $this->a10;
    }




    

    /**
     * Set vol
     *
     * @param string $vol
     * @return Communication
     */
    public function setVol($vol)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return string 
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return Communication
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set pp
     *
     * @param string $pp
     * @return Communication
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get pp
     *
     * @return string 
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Communication
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Communication
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
     * Set created
     *
     * @param \DateTime $created
     * @return Communication
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return Communication
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
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
     * @return Communication
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
     * Set conferance
     *
     * @param string $conferance
     * @return Communication
     */
    public function setConferance($conferance)
    {
        $this->conferance = $conferance;

        return $this;
    }

    /**
     * Get conferance
     *
     * @return string 
     */
    public function getConferance()
    {
        return $this->conferance;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Communication
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }
    /**
     * @var \DateTime
     */
    private $deletedat;


}
