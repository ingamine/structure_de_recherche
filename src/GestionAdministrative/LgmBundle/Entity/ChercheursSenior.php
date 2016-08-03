<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class ChercheursSenior extends Chercheurs
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $grade;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $DesigCorps;

    /**
     * @ORM\OneToMany(targetEntity="These", mappedBy="chercheursSenior")
     */
    private $these;

    /**
     * @ORM\OneToMany(targetEntity="Habilitation", mappedBy="chercheursSenior")
     */
    private $habilitation;

    /**
     * @ORM\OneToMany(targetEntity="Mastere", mappedBy="chercheursSenior")
     */
    private $mastere;

    /**
     * @ORM\ManyToOne(targetEntity="EquipeRecherche", inversedBy="ChercheursSeniors")
     * @ORM\JoinColumn(name="equipe_recherche_id", referencedColumnName="id", nullable=false)
     */
    private $EquipeRecherche;
}