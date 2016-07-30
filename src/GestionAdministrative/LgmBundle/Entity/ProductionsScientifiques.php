<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\MappedSuperclass
 */
class ProductionsScientifiques
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
    private $anneePublication;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $nbAuteur;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $auteur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idChercheurs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $valeur;

    /**
     * @ORM\ManyToMany(targetEntity="Chercheurs", inversedBy="ProductionsScientifiqueses")
     * @ORM\JoinTable(
     *     name="Chercheurs_Has_ProductionsScientifiques",
     *     joinColumns={@ORM\JoinColumn(name="productions_scientifiques_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="chercheurs_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $Chercheurses;
}