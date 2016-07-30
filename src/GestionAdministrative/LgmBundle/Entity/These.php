<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class These
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
    private $titre;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datePremiereInscrit;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $etablissemnt;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $coEncadreur;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $etatThese;

    /**
     * @ORM\ManyToOne(targetEntity="ChercheursSenior", inversedBy="these")
     * @ORM\JoinColumn(name="chercheurs_senior_id", referencedColumnName="id")
     */
    private $chercheursSenior;

    /**
     * @ORM\ManyToMany(targetEntity="Soutenance", mappedBy="these")
     */
    private $soutenance;
}