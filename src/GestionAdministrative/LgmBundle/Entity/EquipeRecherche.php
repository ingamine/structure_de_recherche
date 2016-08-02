<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipeRecherche
 *
 * @ORM\Table(name="equipe_recherche")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\EquipeRechercheRepository")
 */
class EquipeRecherche
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
     * @ORM\Column(name="nomGroupe", type="string", length=255)
     */
    private $nomGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="membres", type="string", length=255)
     */
    private $membres;

    /**
     * @var int
     *
     * @ORM\Column(name="indiceProduction", type="integer")
     */
    private $indiceProduction;


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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return EquipeRecherche
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set membres
     *
     * @param string $membres
     *
     * @return EquipeRecherche
     */
    public function setMembres($membres)
    {
        $this->membres = $membres;

        return $this;
    }

    /**
     * Get membres
     *
     * @return string
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Set indiceProduction
     *
     * @param integer $indiceProduction
     *
     * @return EquipeRecherche
     */
    public function setIndiceProduction($indiceProduction)
    {
        $this->indiceProduction = $indiceProduction;

        return $this;
    }

    /**
     * Get indiceProduction
     *
     * @return int
     */
    public function getIndiceProduction()
    {
        return $this->indiceProduction;
    }
}
