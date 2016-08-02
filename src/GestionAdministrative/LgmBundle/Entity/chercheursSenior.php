<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chercheursSenior
 *
 * @ORM\Table(name="chercheurs_senior")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\chercheursSeniorRepository")
 */
class chercheursSenior
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
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="desigCorps", type="string", length=255)
     */
    private $desigCorps;


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
     * Set grade
     *
     * @param string $grade
     *
     * @return chercheursSenior
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set desigCorps
     *
     * @param string $desigCorps
     *
     * @return chercheursSenior
     */
    public function setDesigCorps($desigCorps)
    {
        $this->desigCorps = $desigCorps;

        return $this;
    }

    /**
     * Get desigCorps
     *
     * @return string
     */
    public function getDesigCorps()
    {
        return $this->desigCorps;
    }
}
