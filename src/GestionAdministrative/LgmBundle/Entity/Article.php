<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Article extends ProductionsScientifiques
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $journal;
}