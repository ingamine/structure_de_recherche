<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\MappedSuperclass
 */
class Chercheurs
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
    private $cin;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $sexe;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieuNaissance;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $etablissement;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profile;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dernierDiplomeObtenu;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDernierDiplomeObtenu;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $etabDelivrantDiplome;

    /**
     * @ORM\ManyToMany(targetEntity="ProductionsScientifiques", mappedBy="Chercheurses")
     */
    private $ProductionsScientifiqueses;
}