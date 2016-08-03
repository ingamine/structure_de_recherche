<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class ChercheursJunior extends Chercheurs
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $diplome;

    /**
     * @ORM\OneToMany(targetEntity="Mastere", mappedBy="chercheursJunior")
     */
    private $mastere;
}