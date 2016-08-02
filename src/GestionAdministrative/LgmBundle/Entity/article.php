<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\articleRepository")
 */
class article
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
     * @ORM\Column(name="nomJournal", type="string", length=255)
     */
    private $nomJournal;


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
     * Set nomJournal
     *
     * @param string $nomJournal
     *
     * @return article
     */
    public function setNomJournal($nomJournal)
    {
        $this->nomJournal = $nomJournal;

        return $this;
    }

    /**
     * Get nomJournal
     *
     * @return string
     */
    public function getNomJournal()
    {
        return $this->nomJournal;
    }
}
