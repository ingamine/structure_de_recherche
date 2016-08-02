<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * These
 *
 * @ORM\Table(name="these")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\TheseRepository")
 */
class These
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
     * @var \DateTime
     *
     * @ORM\Column(name="anneePremierInscrit", type="date")
     */
    private $anneePremierInscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="directeurThese", type="string", length=255)
     */
    private $directeurThese;

    /**
     * @var string
     *
     * @ORM\Column(name="coEncadreur", type="string", length=255)
     */
    private $coEncadreur;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


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
     * @return These
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
     * Set anneePremierInscrit
     *
     * @param \DateTime $anneePremierInscrit
     *
     * @return These
     */
    public function setAnneePremierInscrit($anneePremierInscrit)
    {
        $this->anneePremierInscrit = $anneePremierInscrit;

        return $this;
    }

    /**
     * Get anneePremierInscrit
     *
     * @return \DateTime
     */
    public function getAnneePremierInscrit()
    {
        return $this->anneePremierInscrit;
    }

    /**
     * Set directeurThese
     *
     * @param string $directeurThese
     *
     * @return These
     */
    public function setDirecteurThese($directeurThese)
    {
        $this->directeurThese = $directeurThese;

        return $this;
    }

    /**
     * Get directeurThese
     *
     * @return string
     */
    public function getDirecteurThese()
    {
        return $this->directeurThese;
    }

    /**
     * Set coEncadreur
     *
     * @param string $coEncadreur
     *
     * @return These
     */
    public function setCoEncadreur($coEncadreur)
    {
        $this->coEncadreur = $coEncadreur;

        return $this;
    }

    /**
     * Get coEncadreur
     *
     * @return string
     */
    public function getCoEncadreur()
    {
        return $this->coEncadreur;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return These
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
