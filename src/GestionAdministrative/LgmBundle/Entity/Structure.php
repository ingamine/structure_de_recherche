<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Structure
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $codeStructure;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $etablissement;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $universite;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $discipline;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nomChef;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $cin;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datecreation;

    /**
     * @ORM\OneToMany(targetEntity="EquipeRecherche", mappedBy="Structure")
     */
    private $EquipeRecherches;
}