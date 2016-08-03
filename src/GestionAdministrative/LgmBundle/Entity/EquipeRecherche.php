<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class EquipeRecherche
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nomGroupe;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $membres;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $indiceProduction;

    /**
     * @ORM\OneToMany(targetEntity="ChercheursSenior", mappedBy="EquipeRecherche")
     */
    private $ChercheursSeniors;

    /**
     * @ORM\ManyToOne(targetEntity="Structure", inversedBy="EquipeRecherches")
     * @ORM\JoinColumn(name="structure_id", referencedColumnName="id", nullable=false)
     */
    private $Structure;
}