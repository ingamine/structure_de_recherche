<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant_Chercheur
 *
 * @ORM\Table(name="enseignant__chercheur")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\Enseignant_ChercheurRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Enseignant_Chercheur
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
     * @ORM\Column(name="CIN_EnseigCh", type="integer")
     * @var ArrayCollection $etudiants
     *
     */
    private $cINEnseigCh;

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
     * @ORM\Column(name="nom_jeune_fille", type="string", length=255)
     */
    private $nomJeuneFille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss", type="date")
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naiss", type="string", length=255)
     */
    private $lieuNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="etablisement", type="string", length=255)
     */
    private $etablisement;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_mob", type="integer")
     */
    private $telMob;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_fixe", type="integer")
     */
    private $telFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=255)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="dernier_dep_obtenu", type="string", length=255)
     */
    private $dernierDepObtenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dep_obtenu", type="date")
     */
    private $dateDepObtenu;

    /**
     * @var string
     *
     * @ORM\Column(name="etab_dep_obtenu", type="string", length=255)
     */
    private $etabDepObtenu;

    /**
     * @var int
     *
     * @ORM\Column(name="code_structure", type="integer")
     */
    private $codeStructure;

    
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;

    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;
    
       
   /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

 
    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deletedAt
     *
     * @param string $deletedAt
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enseignant_Chercheur = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
      
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
     * Set cINEnseigCh
     *
     * @param integer $cINEnseigCh
     * @return Enseignant_Chercheur
     */
    public function setCINEnseigCh($cINEnseigCh)
    {
        $this->cINEnseigCh = $cINEnseigCh;

        return $this;
    }

    /**
     * Get cINEnseigCh
     *
     * @return integer 
     */
    public function getCINEnseigCh()
    {
        return $this->cINEnseigCh;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Enseignant_Chercheur
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
     * @return Enseignant_Chercheur
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
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Enseignant_Chercheur
     */
    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->nomJeuneFille = $nomJeuneFille;

        return $this;
    }

    /**
     * Get nomJeuneFille
     *
     * @return string 
     */
    public function getNomJeuneFille()
    {
        return $this->nomJeuneFille;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return Enseignant_Chercheur
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set lieuNaiss
     *
     * @param string $lieuNaiss
     * @return Enseignant_Chercheur
     */
    public function setLieuNaiss($lieuNaiss)
    {
        $this->lieuNaiss = $lieuNaiss;

        return $this;
    }

    /**
     * Get lieuNaiss
     *
     * @return string 
     */
    public function getLieuNaiss()
    {
        return $this->lieuNaiss;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Enseignant_Chercheur
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
     * Set grade
     *
     * @param string $grade
     * @return Enseignant_Chercheur
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
     * Set etablisement
     *
     * @param string $etablisement
     * @return Enseignant_Chercheur
     */
    public function setEtablisement($etablisement)
    {
        $this->etablisement = $etablisement;

        return $this;
    }

    /**
     * Get etablisement
     *
     * @return string 
     */
    public function getEtablisement()
    {
        return $this->etablisement;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Enseignant_Chercheur
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set telMob
     *
     * @param integer $telMob
     * @return Enseignant_Chercheur
     */
    public function setTelMob($telMob)
    {
        $this->telMob = $telMob;

        return $this;
    }

    /**
     * Get telMob
     *
     * @return integer 
     */
    public function getTelMob()
    {
        return $this->telMob;
    }

    /**
     * Set telFixe
     *
     * @param integer $telFixe
     * @return Enseignant_Chercheur
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    /**
     * Get telFixe
     *
     * @return integer 
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return Enseignant_Chercheur
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set dernierDepObtenu
     *
     * @param string $dernierDepObtenu
     * @return Enseignant_Chercheur
     */
    public function setDernierDepObtenu($dernierDepObtenu)
    {
        $this->dernierDepObtenu = $dernierDepObtenu;

        return $this;
    }

    /**
     * Get dernierDepObtenu
     *
     * @return string 
     */
    public function getDernierDepObtenu()
    {
        return $this->dernierDepObtenu;
    }

    /**
     * Set dateDepObtenu
     *
     * @param \DateTime $dateDepObtenu
     * @return Enseignant_Chercheur
     */
    public function setDateDepObtenu($dateDepObtenu)
    {
        $this->dateDepObtenu = $dateDepObtenu;

        return $this;
    }

    /**
     * Get dateDepObtenu
     *
     * @return \DateTime 
     */
    public function getDateDepObtenu()
    {
        return $this->dateDepObtenu;
    }

    /**
     * Set etabDepObtenu
     *
     * @param string $etabDepObtenu
     * @return Enseignant_Chercheur
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

    /**
     * Set codeStructure
     *
     * @param integer $codeStructure
     * @return Enseignant_Chercheur
     */
    public function setCodeStructure($codeStructure)
    {
        $this->codeStructure = $codeStructure;

        return $this;
    }

    /**
     * Get codeStructure
     *
     * @return integer 
     */
    public function getCodeStructure()
    {
        return $this->codeStructure;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Enseignant_Chercheur
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Enseignant_Chercheur
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Add etudiants
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Doctorant $etudiants
     * @return Enseignant_Chercheur
     */
    public function addEtudiant(\GestionAdministrative\LgmBundle\Entity\Doctorant $etudiants)
    {
        $this->etudiants[] = $etudiants;

        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \GestionAdministrative\LgmBundle\Entity\Doctorant $etudiants
     */
    public function removeEtudiant(\GestionAdministrative\LgmBundle\Entity\Doctorant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }
    
    public function __toString()
    {
       
        return $this->getNom();    
    }
    
    
    
}
