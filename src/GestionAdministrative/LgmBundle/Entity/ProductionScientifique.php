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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="productionScientifiqueid")
     * @ORM\JoinTable(name="media",
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
