<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductionScientifique
 *
 * @ORM\Table(name="production_scientifique")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ProductionScientifiqueRepository")
 */
class ProductionScientifique
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="typeProduction", type="string", length=255)
     */
    private $typeProduction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneePublication", type="date")
     */
    private $anneePublication;

    /**
     * @var int
     *
     * @ORM\Column(name="nbAuteur", type="integer")
     */
    private $nbAuteur;

    /**
     * @var int
     *
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return ProductionScientifique
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
     * Set typeProduction
     *
     * @param string $typeProduction
     *
     * @return ProductionScientifique
     */
    public function setTypeProduction($typeProduction)
    {
        $this->typeProduction = $typeProduction;

        return $this;
    }

    /**
     * Get typeProduction
     *
     * @return string
     */
    public function getTypeProduction()
    {
        return $this->typeProduction;
    }

    /**
     * Set anneePublication
     *
     * @param \DateTime $anneePublication
     *
     * @return ProductionScientifique
     */
    public function setAnneePublication($anneePublication)
    {
        $this->anneePublication = $anneePublication;

        return $this;
    }

    /**
     * Get anneePublication
     *
     * @return \DateTime
     */
    public function getAnneePublication()
    {
        return $this->anneePublication;
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
     * @return int
     */
    public function getNbAuteur()
    {
        return $this->nbAuteur;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return ProductionScientifique
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return int
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
