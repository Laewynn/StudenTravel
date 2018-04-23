<?php
/**
 * Created by PhpStorm.
 * User: Win 10
 * Date: 16/01/2018
 * Time: 16:29
 */
require_once(DIR_CORE."Model.php");

class voyages extends Model{
    protected $id_voyages;
    protected $datedebut_voyages;
    protected $datefin_voyages;
    protected $nbetudiants_voyages;
    protected $villedepart_voyages;
    protected $villedarrivee_voyages;
    protected $budget_voyage;

    /**
     * voyages constructor.
     * @param $id_voyages
     * @param $datedebut_voyages
     * @param $datefin_voyages
     * @param $nbetudiants_voyages
     * @param $villedepart_voyages
     * @param $villedarrivee_voyages
     * @param $budget_voyages
     */
    public function __construct($id_voyages = null, $datedebut_voyages = null, $datefin_voyages = null , $nbetudiants_voyages = null, $villedepart_voyages =null, $villedarrivee_voyages =null, $budget_voyage =null)
    {
        parent::__construct("voyages", "id_voyages", false, array());
        $this->id_voyages = $id_voyages;
        $this->datedebut_voyages = $datedebut_voyages;
        $this->datefin_voyages = $datefin_voyages;
        $this->nbetudiants_voyages = $nbetudiants_voyages;
        $this->villedepart_voyages = $villedepart_voyages;
        $this->villedarrivee_voyages = $villedarrivee_voyages;
        $this->budget_voyage = $budget_voyage;
    }

    /**
     * @return null
     */
    public function getIdVoyages()
    {
        return $this->id_voyages;
    }

    /**
     * @param null $id_voyages
     */
    public function setIdVoyages($id_voyages)
    {
        $this->id_voyages = $id_voyages;
    }

    /**
     * @return null
     */
    public function getDatedebutVoyages()
    {
        return date_format(date_create_from_format('Y-m-d',$this->datedebut_voyages), 'd/m/Y');
    }

    /**
     * @param null $datedebut_voyages
     */
    public function setDatedebutVoyages($datedebut_voyages)
    {
        $this->datedebut_voyages = date_format(date_create_from_format('d/m/Y',$datedebut_voyages), 'Y-m-d');
    }

    /**
     * @return null
     */
    public function getDatefinVoyages()
    {
        return date_format(date_create_from_format('Y-m-d',$this->datefin_voyages), 'd/m/Y');
    }

    /**
     * @param null $datefin_voyages
     */
    public function setDatefinVoyages($datefin_voyages)
    {
        $this->datefin_voyages = date_format(date_create_from_format('d/m/Y',$datefin_voyages), 'Y-m-d');
    }

    /**
     * @return null
     */
    public function getNbetudiantsVoyages()
    {
        return $this->nbetudiants_voyages;
    }

    /**
     * @param null $nbetudiants_voyages
     */
    public function setNbetudiantsVoyages($nbetudiants_voyages)
    {
        $this->nbetudiants_voyages = $nbetudiants_voyages;
    }

    /**
     * @return null
     */
    public function getVilledepartVoyages()
    {
        return $this->villedepart_voyages;
    }

    /**
     * @param null $villedepart_voyages
     */
    public function setVilledepartVoyages($villedepart_voyages)
    {
        $this->villedepart_voyages = $villedepart_voyages;
    }

    /**
     * @return null
     */
    public function getVilledarriveeVoyages()
    {
        return $this->villedarrivee_voyages;
    }

    /**
     * @param null $villedarrivee_voyages
     */
    public function setVilledarriveeVoyages($villedarrivee_voyages)
    {
        $this->villedarrivee_voyages = $villedarrivee_voyages;
    }

    /**
     * @return null
     */
    public function getBudgetVoyages()
    {
        return $this->budget_voyage;
    }

    /**
     * @param null $budget_voyages
     */
    public function setBudgetVoyages($budget_voyage)
    {
        $this->budget_voyage = $budget_voyage;
    }


}