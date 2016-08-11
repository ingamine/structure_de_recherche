<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductionScientifique
 *
 * @ORM\Table(name="production_scientifique")
 * @ORM\Entity
 */
class ProductionScientifique
{
    const TYPE_ARTICLE = 1;
    const TYPE_COMMUNICATION = 2;
    const TYPE_OUVRAGE = 3;
    
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Media", mappedBy="productionScientifiqueid")
     */
    private $mediaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="productionScientifiqueid")
     * @ORM\JoinTable(name="production_scientifique_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Production_scientifiqueid", referencedColumnName="id")
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
        $this->mediaid = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ProductionScientifique
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
     * @return ProductionScientifique
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
     * @return ProductionScientifique
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
     * Add mediaid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Media $mediaid
     *
     * @return ProductionScientifique
     */
    public function addMediaid(\GestionAdministrative\LgmBundle\Entity\Media $mediaid)
    {
        $this->mediaid[] = $mediaid;

        return $this;
    }

    /**
     * Remove mediaid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Media $mediaid
     */
    public function removeMediaid(\GestionAdministrative\LgmBundle\Entity\Media $mediaid)
    {
        $this->mediaid->removeElement($mediaid);
    }

    /**
     * Get mediaid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMediaid()
    {
        return $this->mediaid;
    }

    /**
     * Add userid
     *
     * @param \GestionAdministrative\LgmBundle\Entity\User $userid
     *
     * @return ProductionScientifique
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
