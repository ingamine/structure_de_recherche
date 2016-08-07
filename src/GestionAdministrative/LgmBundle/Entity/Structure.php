<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Structure
 *
 * @ORM\Table(name="structure", indexes={@ORM\Index(name="FKstructure760444", columns={"etablissementid"})})
 * @ORM\Entity
 */
class Structure
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
     * @var string
     *
     * @ORM\Column(name="nom_chef", type="string", length=255, nullable=true)
     */
    private $nomChef;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_chef", type="string", length=255, nullable=true)
     */
    private $prenomChef;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_chef", type="integer", nullable=true)
     */
    private $cinChef;

    /**
     * @var string
     *
     * @ORM\Column(name="universite", type="string", length=255, nullable=true)
     */
    private $universite;

    /**
     * @var string
     *
     * @ORM\Column(name="web_site", type="string", length=255, nullable=true)
     */
    private $webSite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="etablissement id", type="integer", nullable=false)
     */
    private $etablissementId;

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etablissementid", referencedColumnName="id")
     * })
     */
    private $etablissementid;



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
     * @return Structure
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
     * Set nomChef
     *
     * @param string $nomChef
     *
     * @return Structure
     */
    public function setNomChef($nomChef)
    {
        $this->nomChef = $nomChef;

        return $this;
    }

    /**
     * Get nomChef
     *
     * @return string
     */
    public function getNomChef()
    {
        return $this->nomChef;
    }

    /**
     * Set prenomChef
     *
     * @param string $prenomChef
     *
     * @return Structure
     */
    public function setPrenomChef($prenomChef)
    {
        $this->prenomChef = $prenomChef;

        return $this;
    }

    /**
     * Get prenomChef
     *
     * @return string
     */
    public function getPrenomChef()
    {
        return $this->prenomChef;
    }

    /**
     * Set cinChef
     *
     * @param integer $cinChef
     *
     * @return Structure
     */
    public function setCinChef($cinChef)
    {
        $this->cinChef = $cinChef;

        return $this;
    }

    /**
     * Get cinChef
     *
     * @return integer
     */
    public function getCinChef()
    {
        return $this->cinChef;
    }

    /**
     * Set universite
     *
     * @param string $universite
     *
     * @return Structure
     */
    public function setUniversite($universite)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return string
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set webSite
     *
     * @param string $webSite
     *
     * @return Structure
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;

        return $this;
    }

    /**
     * Get webSite
     *
     * @return string
     */
    public function getWebSite()
    {
        return $this->webSite;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Structure
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etablissementId
     *
     * @param integer $etablissementId
     *
     * @return Structure
     */
    public function setEtablissementId($etablissementId)
    {
        $this->etablissementId = $etablissementId;

        return $this;
    }

    /**
     * Get etablissementId
     *
     * @return integer
     */
    public function getEtablissementId()
    {
        return $this->etablissementId;
    }
}
