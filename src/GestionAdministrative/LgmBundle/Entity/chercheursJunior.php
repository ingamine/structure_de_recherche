<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chercheursJunior
 *
 * @ORM\Table(name="chercheurs_junior")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\chercheursJuniorRepository")
 */
class chercheursJunior
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome", type="string", length=255)
     */
    private $diplome;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return chercheursJunior
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }
}
