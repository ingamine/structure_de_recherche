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
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $cin;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $prenom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $sexe;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dateNaissance;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lieuNaissance;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $etablissement;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $mobile;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $profile;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    protected $photo;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $dernierDiplomeObtenu;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $dateDernierDiplomeObtenu;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $etabDelivrantDiplome;

    /**
     * @ORM\ManyToMany(targetEntity="ProductionsScientifiques", mappedBy="Chercheurses")
     */
    protected $ProductionsScientifiqueses;
}
