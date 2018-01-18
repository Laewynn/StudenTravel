<?php
/**
 * Created by PhpStorm.
 * User: Win 10
 * Date: 16/01/2018
 * Time: 16:15
 */
require_once(DIR_CORE."Model.php");


class visiteurs extends Model{
    protected $id_visiteurs;
    protected $nom_visteurs;
    protected $prenom_visiteurs;
    protected $telephone_visiteurs;
    protected $mail_visiteurs;

    /**
     * visiteurs constructor.
     * @param $id_visiteurs
     * @param $nom_visteurs
     * @param $prenom_visiteurs
     * @param $telephone_visiteurs
     * @param $mail_visiteurs
     */
    public function __construct($id_visiteurs =null, $nom_visteurs =null , $prenom_visiteurs =null, $telephone_visiteurs =null, $mail_visiteurs=null)
    {
        parent::__construct("visiteurs", "id_visiteurs", false, array());
        $this->id_visiteurs = $id_visiteurs;
        $this->nom_visteurs = $nom_visteurs;
        $this->prenom_visiteurs = $prenom_visiteurs;
        $this->telephone_visiteurs = $telephone_visiteurs;
        $this->mail_visiteurs = $mail_visiteurs;
    }

    /**
     * @return mixed
     */
    public function getIdVisiteurs()
    {
        return $this->id_visiteurs;
    }

    /**
     * @param mixed $id_visiteurs
     */
    public function setIdVisiteurs($id_visiteurs)
    {
        $this->id_visiteurs = $id_visiteurs;
    }

    /**
     * @return mixed
     */
    public function getNomVisteurs()
    {
        return $this->nom_visteurs;
    }

    /**
     * @param mixed $nom_visteurs
     */
    public function setNomVisteurs($nom_visteurs)
    {
        $this->nom_visteurs = $nom_visteurs;
    }

    /**
     * @return mixed
     */
    public function getPrenomVisiteurs()
    {
        return $this->prenom_visiteurs;
    }

    /**
     * @param mixed $prenom_visiteurs
     */
    public function setPrenomVisiteurs($prenom_visiteurs)
    {
        $this->prenom_visiteurs = $prenom_visiteurs;
    }

    /**
     * @return mixed
     */
    public function getTelephoneVisiteurs()
    {
        return $this->telephone_visiteurs;
    }

    /**
     * @param mixed $telephone_visiteurs
     */
    public function setTelephoneVisiteurs($telephone_visiteurs)
    {
        $this->telephone_visiteurs = $telephone_visiteurs;
    }

    /**
     * @return mixed
     */
    public function getMailVisiteurs()
    {
        return $this->mail_visiteurs;
    }

    /**
     * @param mixed $mail_visiteurs
     */
    public function setMailVisiteurs($mail_visiteurs)
    {
        $this->mail_visiteurs = $mail_visiteurs;
    }



}