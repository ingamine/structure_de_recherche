<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class OuvrageScientifique extends ProductionsScientifiques
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $edition;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $isbn;
}