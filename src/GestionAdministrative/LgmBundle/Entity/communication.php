<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * communication
 *
 * @ORM\Table(name="communication")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\communicationRepository")
 */
class communication
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
     * @ORM\Column(name="nomCongres", type="string", length=255)
     */
    private $nomCongres;


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
     * Set nomCongres
     *
     * @param string $nomCongres
     *
     * @return communication
     */
    public function setNomCongres($nomCongres)
    {
        $this->nomCongres = $nomCongres;

        return $this;
    }

    /**
     * Get nomCongres
     *
     * @return string
     */
    public function getNomCongres()
    {
        return $this->nomCongres;
    }
}
