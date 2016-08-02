<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chercheurs
 *
 * @ORM\Table(name="chercheurs")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ChercheursRepository")
 */
class Chercheurs
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
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", unique=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaissance", type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="mobile", type="integer")
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", length=255)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="dernierDiplomeObtenu", type="string", length=255)
     */
    private $dernierDiplomeObtenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDernierDiplomeObtenu", type="date")
     */
    private $dateDernierDiplomeObtenu;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissementDelivrantDiplome", type="string", length=255)
     */
    private $etablissementDelivrantDiplome;


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
     * Set cin
     *
     * @param integer $cin
     *
     * @return Chercheurs
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return int
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Chercheurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Chercheurs
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Chercheurs
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Chercheurs
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     *
     * @return Chercheurs
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return Chercheurs
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Chercheurs
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return Chercheurs
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return int
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return Chercheurs
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
     * Set profile
     *
     * @param string $profile
     *
     * @return Chercheurs
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Chercheurs
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set dernierDiplomeObtenu
     *
     * @param string $dernierDiplomeObtenu
     *
     * @return Chercheurs
     */
    public function setDernierDiplomeObtenu($dernierDiplomeObtenu)
    {
        $this->dernierDiplomeObtenu = $dernierDiplomeObtenu;

        return $this;
    }

    /**
     * Get dernierDiplomeObtenu
     *
     * @return string
     */
    public function getDernierDiplomeObtenu()
    {
        return $this->dernierDiplomeObtenu;
    }

    /**
     * Set dateDernierDiplomeObtenu
     *
     * @param \DateTime $dateDernierDiplomeObtenu
     *
     * @return Chercheurs
     */
    public function setDateDernierDiplomeObtenu($dateDernierDiplomeObtenu)
    {
        $this->dateDernierDiplomeObtenu = $dateDernierDiplomeObtenu;

        return $this;
    }

    /**
     * Get dateDernierDiplomeObtenu
     *
     * @return \DateTime
     */
    public function getDateDernierDiplomeObtenu()
    {
        return $this->dateDernierDiplomeObtenu;
    }

    /**
     * Set etablissementDelivrantDiplome
     *
     * @param string $etablissementDelivrantDiplome
     *
     * @return Chercheurs
     */
    public function setEtablissementDelivrantDiplome($etablissementDelivrantDiplome)
    {
        $this->etablissementDelivrantDiplome = $etablissementDelivrantDiplome;

        return $this;
    }

    /**
     * Get etablissementDelivrantDiplome
     *
     * @return string
     */
    public function getEtablissementDelivrantDiplome()
    {
        return $this->etablissementDelivrantDiplome;
    }
}
