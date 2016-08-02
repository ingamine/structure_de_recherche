<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mastere
 *
 * @ORM\Table(name="mastere")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\MastereRepository")
 */
class Mastere
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
     * @ORM\Column(name="etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="directeurMastere", type="string", length=255)
     */
    private $directeurMastere;

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
     * @return Mastere
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
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return Mastere
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set directeurMastere
     *
     * @param string $directeurMastere
     *
     * @return Mastere
     */
    public function setDirecteurMastere($directeurMastere)
    {
        $this->directeurMastere = $directeurMastere;

        return $this;
    }

    /**
     * Get directeurMastere
     *
     * @return string
     */
    public function getDirecteurMastere()
    {
        return $this->directeurMastere;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Mastere
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
