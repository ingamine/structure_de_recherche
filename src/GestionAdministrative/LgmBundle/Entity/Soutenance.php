<?php
namespace GestionAdministrative\LgmBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Soutenance
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $jury;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $mention;

    /**
     * @ORM\ManyToMany(targetEntity="Mastere", inversedBy="soutenance")
     * @ORM\JoinTable(
     *     name="MastereToSoutenance",
     *     joinColumns={@ORM\JoinColumn(name="soutenance_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="mastere_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $mastere;

    /**
     * @ORM\ManyToMany(targetEntity="Habilitation", inversedBy="soutenance")
     * @ORM\JoinTable(
     *     name="HabilitationHasSoutenance",
     *     joinColumns={@ORM\JoinColumn(name="soutenance_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="habilitation_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $habilitation;

    /**
     * @ORM\ManyToMany(targetEntity="These", inversedBy="soutenance")
     * @ORM\JoinTable(
     *     name="TheseHasSoutenance",
     *     joinColumns={@ORM\JoinColumn(name="soutenance_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="these_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $these;
}