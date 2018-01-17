<?php
/**
 * Created by PhpStorm.
 * User: Win 10
 * Date: 16/01/2018
 * Time: 16:26
 */
require_once(DIR_CORE."Model.php");
class villes extends Model {

    protected $id_villes;
    protected $nom_villes;
    protected $description_villes;
    protected $activites_villes;

    /**
     * villes constructor.
     * @param $id_villes
     * @param $nom_villes
     * @param $description_villes
     * @param $activites_villes
     */
    public function __construct($id_villes =null, $nom_villes =null, $description_villes =null, $activites_villes =null)
    {
        parent::__construct("villes", "id_villes", false, array());
        $this->id_villes = $id_villes;
        $this->nom_villes = $nom_villes;
        $this->description_villes = $description_villes;
        $this->activites_villes = $activites_villes;
    }

    /**
     * @return mixed
     */
    public function getIdVilles()
    {
        return $this->id_villes;
    }

    /**
     * @param mixed $id_villes
     */
    public function setIdVilles($id_villes)
    {
        $this->id_villes = $id_villes;
    }

    /**
     * @return mixed
     */
    public function getNomVilles()
    {
        return $this->nom_villes;
    }

    /**
     * @param mixed $nom_villes
     */
    public function setNomVilles($nom_villes)
    {
        $this->nom_villes = $nom_villes;
    }

    /**
     * @return mixed
     */
    public function getDescriptionVilles()
    {
        return $this->description_villes;
    }

    /**
     * @param mixed $description_villes
     */
    public function setDescriptionVilles($description_villes)
    {
        $this->description_villes = $description_villes;
    }

    /**
     * @return mixed
     */
    public function getActivitesVilles()
    {
        return $this->activites_villes;
    }

    /**
     * @param mixed $activites_villes
     */
    public function setActivitesVilles($activites_villes)
    {
        $this->activites_villes = $activites_villes;
    }



}