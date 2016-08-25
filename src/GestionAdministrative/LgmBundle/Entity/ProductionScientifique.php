<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * ProductionScientifique
 *
 * @ORM\Table(name="production_scientifique")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ProductionScientifiqueRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class ProductionScientifique
{
    const TYPE_ARTICLE = 1;
    const TYPE_COMMUNICATION = 2;
    const TYPE_OUVRAGE = 3;
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date", nullable=true)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=true)
     */
    private $auteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_auteur", type="integer", nullable=false)
     */
    private $nbAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_journal", type="string", length=255, nullable=true)
     */
    private $nomJournal;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_congres", type="string", length=255, nullable=true)
     */
    private $nomCongres;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255, nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="indexe", type="string", length=255, nullable=true)
     */
    private $indexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="index_factor", type="integer", nullable=true)
     */
    private $indexFactor;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;
    
    /**
     * @ORM\ManyToMany(targetEntity="GestionAdministrative\LgmBundle\Entity\Media", cascade={"persist"})
     */
    
    private $Media;
    

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
     * Set title
     *
     * @param string $title
     * @return ProductionScientifique
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
     * Set type
     *
     * @param integer $type
     * @return ProductionScientifique
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return ProductionScientifique
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return ProductionScientifique
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set nbAuteur
     *
     * @param integer $nbAuteur
     * @return ProductionScientifique
     */
    public function setNbAuteur($nbAuteur)
    {
        $this->nbAuteur = $nbAuteur;

        return $this;
    }

    /**
     * Get nbAuteur
     *
     * @return integer 
     */
    public function getNbAuteur()
    {
        return $this->nbAuteur;
    }

    /**
     * Set nomJournal
     *
     * @param string $nomJournal
     * @return ProductionScientifique
     */
    public function setNomJournal($nomJournal)
    {
        $this->nomJournal = $nomJournal;

        return $this;
    }

    /**
     * Get nomJournal
     *
     * @return string 
     */
    public function getNomJournal()
    {
        return $this->nomJournal;
    }

    /**
     * Set nomCongres
     *
     * @param string $nomCongres
     * @return ProductionScientifique
     */
    public function setNomCongres($nomCongres)
    {
        $this->nomCongres = $nomCongres;

        return $this;
    }

    /**
     * Get nomCongres
     *
     * @return string 
     */
    public function getNomCongres()
    {
        return $this->nomCongres;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return ProductionScientifique
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return ProductionScientifique
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set indexe
     *
     * @param string $indexe
     * @return ProductionScientifique
     */
    public function setIndexe($indexe)
    {
        $this->indexe = $indexe;

        return $this;
    }

    /**
     * Get indexe
     *
     * @return string 
     */
    public function getIndexe()
    {
        return $this->indexe;
    }

    /**
     * Set indexFactor
     *
     * @param integer $indexFactor
     * @return ProductionScientifique
     */
    public function setIndexFactor($indexFactor)
    {
        $this->indexFactor = $indexFactor;

        return $this;
    }

    /**
     * Get indexFactor
     *
     * @return integer 
     */
    public function getIndexFactor()
    {
        return $this->indexFactor;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return ProductionScientifique
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
     * @return ProductionScientifique
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Media
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Media $media
     * @return ProductionScientifique
     */
    public function addMedia(\GestionAdministrative\LgmBundle\Entity\Media $media)
    {
        $this->Media[] = $media;

        return $this;
    }

    /**
     * Remove Media
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Media $media
     */
    public function removeMedia(\GestionAdministrative\LgmBundle\Entity\Media $media)
    {
        $this->Media->removeElement($media);
    }

    /**
     * Get Media
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedia()
    {
        return $this->Media;
    }
    
    public function __toString()
    {
        return strval($this->id);
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return ProductionScientifique
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
}
