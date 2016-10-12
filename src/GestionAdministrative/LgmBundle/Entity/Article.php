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
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ArticleRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */

class Article
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
     * @ORM\Column(name="journal", type="string", length=255)
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="indx", type="string", length=255)
     */
    private $indx;

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
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $brochure;
    
    

    public function getBrochure()
    {
        return $this->brochure;
    }

    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }


    
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
     * Set equipe
     *
     * @param string $equipe
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * Set journal
     *
     * @param string $journal
     * @return Article
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;

        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set indx
     *
     * @param string $indx
     * @return Article
     */
    public function setIndx($indx)
    {
        $this->indx = $indx;

        return $this;
    }

    /**
     * Get indx
     *
     * @return string 
     */
    public function getIndx()
    {
        return $this->indx;
    }

    /**
     * Set vol
     *
     * @param string $vol
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * Set created
     *
     * @param \DateTime $created
     * @return Article
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
     * @return Article
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
     * @return Article
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

    
    
    
}
