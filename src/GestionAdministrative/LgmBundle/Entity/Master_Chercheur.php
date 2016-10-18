<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Master_Chercheur
 *
 * @ORM\Table(name="master__chercheur")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\Master_ChercheurRepository")
 */
class Master_Chercheur
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
     * @ORM\Column(name="CIN_Master", type="string", length=255)
     */
    private $cINMaster;

    /**
     * @var string
     * 
     * @ORM\Column(name="nom", type="string", nullable=true)
     */
    private $nom;

    /**
     * @var string
     * 
     * @ORM\Column(name="prenom", type="string", nullable=true)
     */
    private $prenom;
   
    /**
     * @var string
     * 
     * @ORM\Column(name="codeStructure", type="string", nullable=true)
     */
    private $codeStructure;

     /**
     * @var string
     * 
     * @ORM\Column(name="etab", type="string", nullable=true)
     */
    private $etab;
   
    /**
     * @var string $dateNaiss
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $date_naissance;

    /**
     * @var string
     * 
     * @ORM\Column(name="lieu_naissance", type="string", nullable=true)
     */
    private $lieu_naissance;

    /**
     * @var int
     * 
     * @ORM\Column(name="tel_mob", type="integer", nullable=true)
     */
    private $tel_mob;

    /**
     * @var int
     * 
     *@ORM\Column(name="tel_fixe", type="integer", nullable=true)
     */
    private $tel_fixe;

    /**
     * @var string
     * 
     * @ORM\Column(name="e_mail", type="string", nullable=true)
     */
    private $e_mail;

    /**
     * @var string
     * 
     * @ORM\Column(name="dernier_diplome_obtenu", type="string", nullable=true)
     */
    private $dernier_diplome_obtenu;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="date_dernier_dip_obtenu", type="date", nullable=true)
     */
    private $date_dernier_dip_obtenu;

    /**
     * @var string
     * 
     * @ORM\Column(name="etabDepObtenu", type="string", nullable=true)
     */
    private $etabDepObtenu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return Master_Chercheur
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
     * Set cINMaster
     *
     * @param string $cINMaster
     * @return Master_Chercheur
     */
    public function setCINMaster($cINMaster)
    {
        $this->cINMaster = $cINMaster;

        return $this;
    }

    /**
     * Get cINMaster
     *
     * @return string 
     */
    public function getCINMaster()
    {
        return $this->cINMaster;
    }

    

    /**
     * Set nom
     *
     * @param string $nom
     * @return Master_Chercheur
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
     * @return Master_Chercheur
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
     * Set codeStructure
     *
     * @param string $codeStructure
     * @return Master_Chercheur
     */
    public function setCodeStructure($codeStructure)
    {
        $this->codeStructure = $codeStructure;

        return $this;
    }

    /**
     * Get codeStructure
     *
     * @return string 
     */
    public function getCodeStructure()
    {
        return $this->codeStructure;
    }

    /**
     * Set etab
     *
     * @param string $etab
     * @return Master_Chercheur
     */
    public function setEtab($etab)
    {
        $this->etab = $etab;

        return $this;
    }

    /**
     * Get etab
     *
     * @return string 
     */
    public function getEtab()
    {
        return $this->etab;
    }

    /**
     * Set date_naissance
     *
     * @param \DateTime $dateNaissance
     * @return Master_Chercheur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->date_naissance = $dateNaissance;

        return $this;
    }

    /**
     * Get date_naissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set lieu_naissance
     *
     * @param string $lieuNaissance
     * @return Master_Chercheur
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieu_naissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieu_naissance
     *
     * @return string 
     */
    public function getLieuNaissance()
    {
        return $this->lieu_naissance;
    }

    /**
     * Set tel_mob
     *
     * @param integer $telMob
     * @return Master_Chercheur
     */
    public function setTelMob($telMob)
    {
        $this->tel_mob = $telMob;

        return $this;
    }

    /**
     * Get tel_mob
     *
     * @return integer 
     */
    public function getTelMob()
    {
        return $this->tel_mob;
    }

    /**
     * Set tel_fixe
     *
     * @param integer $telFixe
     * @return Master_Chercheur
     */
    public function setTelFixe($telFixe)
    {
        $this->tel_fixe = $telFixe;

        return $this;
    }

    /**
     * Get tel_fixe
     *
     * @return integer 
     */
    public function getTelFixe()
    {
        return $this->tel_fixe;
    }

    /**
     * Set e_mail
     *
     * @param string $eMail
     * @return Master_Chercheur
     */
    public function setEMail($eMail)
    {
        $this->e_mail = $eMail;

        return $this;
    }

    /**
     * Get e_mail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * Set dernier_diplome_obtenu
     *
     * @param string $dernierDiplomeObtenu
     * @return Master_Chercheur
     */
    public function setDernierDiplomeObtenu($dernierDiplomeObtenu)
    {
        $this->dernier_diplome_obtenu = $dernierDiplomeObtenu;

        return $this;
    }

    /**
     * Get dernier_diplome_obtenu
     *
     * @return string 
     */
    public function getDernierDiplomeObtenu()
    {
        return $this->dernier_diplome_obtenu;
    }

    /**
     * Set date_dernier_dip_obtenu
     *
     * @param \DateTime $dateDernierDipObtenu
     * @return Master_Chercheur
     */
    public function setDateDernierDipObtenu($dateDernierDipObtenu)
    {
        $this->date_dernier_dip_obtenu = $dateDernierDipObtenu;

        return $this;
    }

    /**
     * Get date_dernier_dip_obtenu
     *
     * @return \DateTime 
     */
    public function getDateDernierDipObtenu()
    {
        return $this->date_dernier_dip_obtenu;
    }

    /**
     * Set etabDepObtenu
     *
     * @param string $etabDepObtenu
     * @return Master_Chercheur
     */
    public function setEtabDepObtenu($etabDepObtenu)
    {
        $this->etabDepObtenu = $etabDepObtenu;

        return $this;
    }

    /**
     * Get etabDepObtenu
     *
     * @return string 
     */
    public function getEtabDepObtenu()
    {
        return $this->etabDepObtenu;
    }
}
