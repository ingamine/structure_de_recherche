<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ouvrageScientifique
 *
 * @ORM\Table(name="ouvrage_scientifique")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ouvrageScientifiqueRepository")
 */
class ouvrageScientifique
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
     * @ORM\Column(name="edition", type="string", length=255)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;


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
     * Set edition
     *
     * @param string $edition
     *
     * @return ouvrageScientifique
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return ouvrageScientifique
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
}
