<?php
/**
 * Created by PhpStorm.
 * User: Laëtitia
 * Date: 16/01/2018
 * Time: 16:06
 */
require_once(DIR_CORE."Model.php");

class guides extends Model{
    protected $id_guides;
    protected $nom_guides;
    protected $prenom_guides;
    protected $ville_guides;
    protected $description_guides;
    protected $caracteristiques_guides;
    protected $telephone_guides;
    protected $mail_guides;

    /**
     * guides constructor.
     * @param $id_guides
     * @param $nom_guides
     * @param $prenom_guides
     * @param $ville_guides
     * @param $description_guides
     * @param $caracteristiques_guides
     * @param $telephone_guides
     * @param $mail_guides
     */
    public function __construct($id_guides, $nom_guides, $prenom_guides, $ville_guides, $description_guides, $caracteristiques_guides, $telephone_guides, $mail_guides)
    {
        parent::__construct("guides", "id_guides", false, array());
        $this->id_guides = $id_guides;
        $this->nom_guides = $nom_guides;
        $this->prenom_guides = $prenom_guides;
        $this->ville_guides = $ville_guides;
        $this->description_guides = $description_guides;
        $this->caracteristique_guides = $caracteristiques_guides;
        $this->telephone_guides = $telephone_guides;
        $this->mail_guides = $mail_guides;
    }

    /**
     * @return mixed
     */
    public function getIdGuides()
    {
        return $this->id_guides;
    }

    /**
     * @param mixed $id_guides
     */
    public function setIdGuides($id_guides)
    {
        $this->id_guides = $id_guides;
    }

    /**
     * @return mixed
     */
    public function getNomGuides()
    {
        return $this->nom_guides;
    }

    /**
     * @param mixed $nom_guides
     */
    public function setNomGuides($nom_guides)
    {
        $this->nom_guides = $nom_guides;
    }

    /**
     * @return mixed
     */
    public function getPrenomGuides()
    {
        return $this->prenom_guides;
    }

    /**
     * @param mixed $prenom_guides
     */
    public function setPrenomGuides($prenom_guides)
    {
        $this->prenom_guides = $prenom_guides;
    }

    /**
     * @return mixed
     */
    public function getVilleGuides()
    {
        return $this->ville_guides;
    }

    /**
     * @param mixed $ville_guides
     */
    public function setVilleGuides($ville_guides)
    {
        $this->ville_guides = $ville_guides;
    }

    /**
     * @return mixed
     */
    public function getDescriptionGuides()
    {
        return $this->description_guides;
    }

    /**
     * @param mixed $description_guides
     */
    public function setDescriptionGuides($description_guides)
    {
        $this->description_guides = $description_guides;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiquesGuides()
    {
        return $this->caracteristiques_guides;
    }

    /**
     * @param mixed $caracteristique_guides
     */
    public function setCaracteristiquesGuides($caracteristiques_guides)
    {
        $this->caracteristique_guides = $caracteristiques_guides;
    }

    /**
     * @return mixed
     */
    public function getTelephoneGuides()
    {
        return $this->telephone_guides;
    }

    /**
     * @param mixed $telephone_guides
     */
    public function setTelephoneGuides($telephone_guides)
    {
        $this->telephone_guides = $telephone_guides;
    }

    /**
     * @return mixed
     */
    public function getMailGuides()
    {
        return $this->mail_guides;
    }

    /**
     * @param mixed $mail_guides
     */
    public function setMailGuides($mail_guides)
    {
        $this->mail_guides = $mail_guides;
    }




}