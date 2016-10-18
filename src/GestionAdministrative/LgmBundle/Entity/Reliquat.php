<?php

namespace GestionAdministrative\LgmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reliquat
 *
 * @ORM\Table(name="reliquat")
 * @ORM\Entity(repositoryClass="GestionAdministrative\LgmBundle\Repository\ReliquatRepository")
 */
class Reliquat
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
     * @ORM\Column(name="Num", type="integer")
     */
    private $num;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_equip", type="float")
     */
    private $creditRestantEquip;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_equip", type="float")
     */
    private $creditEnCoursEquip;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_sous_traitance", type="float")
     */
    private $creditRestantSousTraitance;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_sous_traitance", type="float")
     */
    private $creditEnCoursSousTraitance;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_consommable_petit_materiels", type="float")
     */
    private $creditRestantConsommablePetitMateriels;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_consommable_petit_materiels", type="float")
     */
    private $creditEnCoursConsommablePetitMateriels;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_missions", type="float")
     */
    private $creditRestantMissions;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_missions", type="float")
     */
    private $creditEnCoursMissions;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_stages", type="float")
     */
    private $creditRestantStages;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_stages", type="float")
     */
    private $creditEnCoursStages;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_deplacement_hebergement", type="float")
     */
    private $creditRestantDeplacementHebergement;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_deplacement_hebergement", type="float")
     */
    private $creditEnCoursDeplacementHebergement;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_manifestation", type="float")
     */
    private $creditRestantManifestation;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_manifestation", type="float")
     */
    private $creditEnCoursManifestation;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_vacation", type="float")
     */
    private $creditRestantVacation;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_vacation", type="float")
     */
    private $creditEnCoursVacation;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_documentation_reseaux", type="float")
     */
    private $creditRestantDocumentationReseaux;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_documentation_reseaux", type="float")
     */
    private $creditEnCoursDocumentationReseaux;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_restant_maintenance_divers", type="float")
     */
    private $creditRestantMaintenanceDivers;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_en_cours_maintenance_divers", type="float")
     */
    private $creditEnCoursMaintenanceDivers;

    /**
     * @var string
     *
     * @ORM\Column(name="code_structure", type="string", length=255)
     */
    private $codeStructure;


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
     * Set num
     *
     * @param integer $num
     * @return Reliquat
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set creditRestantEquip
     *
     * @param float $creditRestantEquip
     * @return Reliquat
     */
    public function setCreditRestantEquip($creditRestantEquip)
    {
        $this->creditRestantEquip = $creditRestantEquip;

        return $this;
    }

    /**
     * Get creditRestantEquip
     *
     * @return float 
     */
    public function getCreditRestantEquip()
    {
        return $this->creditRestantEquip;
    }

    /**
     * Set creditEnCoursEquip
     *
     * @param float $creditEnCoursEquip
     * @return Reliquat
     */
    public function setCreditEnCoursEquip($creditEnCoursEquip)
    {
        $this->creditEnCoursEquip = $creditEnCoursEquip;

        return $this;
    }

    /**
     * Get creditEnCoursEquip
     *
     * @return float 
     */
    public function getCreditEnCoursEquip()
    {
        return $this->creditEnCoursEquip;
    }

    /**
     * Set creditRestantSousTraitance
     *
     * @param float $creditRestantSousTraitance
     * @return Reliquat
     */
    public function setCreditRestantSousTraitance($creditRestantSousTraitance)
    {
        $this->creditRestantSousTraitance = $creditRestantSousTraitance;

        return $this;
    }

    /**
     * Get creditRestantSousTraitance
     *
     * @return float 
     */
    public function getCreditRestantSousTraitance()
    {
        return $this->creditRestantSousTraitance;
    }

    /**
     * Set creditEnCoursSousTraitance
     *
     * @param float $creditEnCoursSousTraitance
     * @return Reliquat
     */
    public function setCreditEnCoursSousTraitance($creditEnCoursSousTraitance)
    {
        $this->creditEnCoursSousTraitance = $creditEnCoursSousTraitance;

        return $this;
    }

    /**
     * Get creditEnCoursSousTraitance
     *
     * @return float 
     */
    public function getCreditEnCoursSousTraitance()
    {
        return $this->creditEnCoursSousTraitance;
    }

    /**
     * Set creditRestantConsommablePetitMateriels
     *
     * @param float $creditRestantConsommablePetitMateriels
     * @return Reliquat
     */
    public function setCreditRestantConsommablePetitMateriels($creditRestantConsommablePetitMateriels)
    {
        $this->creditRestantConsommablePetitMateriels = $creditRestantConsommablePetitMateriels;

        return $this;
    }

    /**
     * Get creditRestantConsommablePetitMateriels
     *
     * @return float 
     */
    public function getCreditRestantConsommablePetitMateriels()
    {
        return $this->creditRestantConsommablePetitMateriels;
    }

    /**
     * Set creditEnCoursConsommablePetitMateriels
     *
     * @param float $creditEnCoursConsommablePetitMateriels
     * @return Reliquat
     */
    public function setCreditEnCoursConsommablePetitMateriels($creditEnCoursConsommablePetitMateriels)
    {
        $this->creditEnCoursConsommablePetitMateriels = $creditEnCoursConsommablePetitMateriels;

        return $this;
    }

    /**
     * Get creditEnCoursConsommablePetitMateriels
     *
     * @return float 
     */
    public function getCreditEnCoursConsommablePetitMateriels()
    {
        return $this->creditEnCoursConsommablePetitMateriels;
    }

    /**
     * Set creditRestantMissions
     *
     * @param float $creditRestantMissions
     * @return Reliquat
     */
    public function setCreditRestantMissions($creditRestantMissions)
    {
        $this->creditRestantMissions = $creditRestantMissions;

        return $this;
    }

    /**
     * Get creditRestantMissions
     *
     * @return float 
     */
    public function getCreditRestantMissions()
    {
        return $this->creditRestantMissions;
    }

    /**
     * Set creditEnCoursMissions
     *
     * @param float $creditEnCoursMissions
     * @return Reliquat
     */
    public function setCreditEnCoursMissions($creditEnCoursMissions)
    {
        $this->creditEnCoursMissions = $creditEnCoursMissions;

        return $this;
    }

    /**
     * Get creditEnCoursMissions
     *
     * @return float 
     */
    public function getCreditEnCoursMissions()
    {
        return $this->creditEnCoursMissions;
    }

    /**
     * Set creditRestantStages
     *
     * @param float $creditRestantStages
     * @return Reliquat
     */
    public function setCreditRestantStages($creditRestantStages)
    {
        $this->creditRestantStages = $creditRestantStages;

        return $this;
    }

    /**
     * Get creditRestantStages
     *
     * @return float 
     */
    public function getCreditRestantStages()
    {
        return $this->creditRestantStages;
    }

    /**
     * Set creditEnCoursStages
     *
     * @param float $creditEnCoursStages
     * @return Reliquat
     */
    public function setCreditEnCoursStages($creditEnCoursStages)
    {
        $this->creditEnCoursStages = $creditEnCoursStages;

        return $this;
    }

    /**
     * Get creditEnCoursStages
     *
     * @return float 
     */
    public function getCreditEnCoursStages()
    {
        return $this->creditEnCoursStages;
    }

    /**
     * Set creditRestantDeplacementHebergement
     *
     * @param float $creditRestantDeplacementHebergement
     * @return Reliquat
     */
    public function setCreditRestantDeplacementHebergement($creditRestantDeplacementHebergement)
    {
        $this->creditRestantDeplacementHebergement = $creditRestantDeplacementHebergement;

        return $this;
    }

    /**
     * Get creditRestantDeplacementHebergement
     *
     * @return float 
     */
    public function getCreditRestantDeplacementHebergement()
    {
        return $this->creditRestantDeplacementHebergement;
    }

    /**
     * Set creditEnCoursDeplacementHebergement
     *
     * @param float $creditEnCoursDeplacementHebergement
     * @return Reliquat
     */
    public function setCreditEnCoursDeplacementHebergement($creditEnCoursDeplacementHebergement)
    {
        $this->creditEnCoursDeplacementHebergement = $creditEnCoursDeplacementHebergement;

        return $this;
    }

    /**
     * Get creditEnCoursDeplacementHebergement
     *
     * @return float 
     */
    public function getCreditEnCoursDeplacementHebergement()
    {
        return $this->creditEnCoursDeplacementHebergement;
    }

    /**
     * Set creditRestantManifestation
     *
     * @param float $creditRestantManifestation
     * @return Reliquat
     */
    public function setCreditRestantManifestation($creditRestantManifestation)
    {
        $this->creditRestantManifestation = $creditRestantManifestation;

        return $this;
    }

    /**
     * Get creditRestantManifestation
     *
     * @return float 
     */
    public function getCreditRestantManifestation()
    {
        return $this->creditRestantManifestation;
    }

    /**
     * Set creditEnCoursManifestation
     *
     * @param float $creditEnCoursManifestation
     * @return Reliquat
     */
    public function setCreditEnCoursManifestation($creditEnCoursManifestation)
    {
        $this->creditEnCoursManifestation = $creditEnCoursManifestation;

        return $this;
    }

    /**
     * Get creditEnCoursManifestation
     *
     * @return float 
     */
    public function getCreditEnCoursManifestation()
    {
        return $this->creditEnCoursManifestation;
    }

    /**
     * Set creditRestantVacation
     *
     * @param float $creditRestantVacation
     * @return Reliquat
     */
    public function setCreditRestantVacation($creditRestantVacation)
    {
        $this->creditRestantVacation = $creditRestantVacation;

        return $this;
    }

    /**
     * Get creditRestantVacation
     *
     * @return float 
     */
    public function getCreditRestantVacation()
    {
        return $this->creditRestantVacation;
    }

    /**
     * Set creditEnCoursVacation
     *
     * @param float $creditEnCoursVacation
     * @return Reliquat
     */
    public function setCreditEnCoursVacation($creditEnCoursVacation)
    {
        $this->creditEnCoursVacation = $creditEnCoursVacation;

        return $this;
    }

    /**
     * Get creditEnCoursVacation
     *
     * @return float 
     */
    public function getCreditEnCoursVacation()
    {
        return $this->creditEnCoursVacation;
    }

    /**
     * Set creditRestantDocumentationReseaux
     *
     * @param float $creditRestantDocumentationReseaux
     * @return Reliquat
     */
    public function setCreditRestantDocumentationReseaux($creditRestantDocumentationReseaux)
    {
        $this->creditRestantDocumentationReseaux = $creditRestantDocumentationReseaux;

        return $this;
    }

    /**
     * Get creditRestantDocumentationReseaux
     *
     * @return float 
     */
    public function getCreditRestantDocumentationReseaux()
    {
        return $this->creditRestantDocumentationReseaux;
    }

    /**
     * Set creditEnCoursDocumentationReseaux
     *
     * @param float $creditEnCoursDocumentationReseaux
     * @return Reliquat
     */
    public function setCreditEnCoursDocumentationReseaux($creditEnCoursDocumentationReseaux)
    {
        $this->creditEnCoursDocumentationReseaux = $creditEnCoursDocumentationReseaux;

        return $this;
    }

    /**
     * Get creditEnCoursDocumentationReseaux
     *
     * @return float 
     */
    public function getCreditEnCoursDocumentationReseaux()
    {
        return $this->creditEnCoursDocumentationReseaux;
    }

    /**
     * Set creditRestantMaintenanceDivers
     *
     * @param float $creditRestantMaintenanceDivers
     * @return Reliquat
     */
    public function setCreditRestantMaintenanceDivers($creditRestantMaintenanceDivers)
    {
        $this->creditRestantMaintenanceDivers = $creditRestantMaintenanceDivers;

        return $this;
    }

    /**
     * Get creditRestantMaintenanceDivers
     *
     * @return float 
     */
    public function getCreditRestantMaintenanceDivers()
    {
        return $this->creditRestantMaintenanceDivers;
    }

    /**
     * Set creditEnCoursMaintenanceDivers
     *
     * @param float $creditEnCoursMaintenanceDivers
     * @return Reliquat
     */
    public function setCreditEnCoursMaintenanceDivers($creditEnCoursMaintenanceDivers)
    {
        $this->creditEnCoursMaintenanceDivers = $creditEnCoursMaintenanceDivers;

        return $this;
    }

    /**
     * Get creditEnCoursMaintenanceDivers
     *
     * @return float 
     */
    public function getCreditEnCoursMaintenanceDivers()
    {
        return $this->creditEnCoursMaintenanceDivers;
    }

    /**
     * Set codeStructure
     *
     * @param string $codeStructure
     * @return Reliquat
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
}
