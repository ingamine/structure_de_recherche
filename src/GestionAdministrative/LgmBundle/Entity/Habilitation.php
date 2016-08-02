<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habilitation
 *
 * @ORM\Table(name="habilitation")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\HabilitationRepository")
 */
class Habilitation
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
     * @ORM\Column(name="directeurHabilitation", type="string", length=255)
     */
    private $directeurHabilitation;

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
     * @return Habilitation
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
     * @return Habilitation
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
     * Set directeurHabilitation
     *
     * @param string $directeurHabilitation
     *
     * @return Habilitation
     */
    public function setDirecteurHabilitation($directeurHabilitation)
    {
        $this->directeurHabilitation = $directeurHabilitation;

        return $this;
    }

    /**
     * Get directeurHabilitation
     *
     * @return string
     */
    public function getDirecteurHabilitation()
    {
        return $this->directeurHabilitation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Habilitation
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
