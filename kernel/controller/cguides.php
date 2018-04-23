<?php
require_once(DIR_CTRL.'/controller.php');
//require(DIR_CORE.'class/classCategories.php');
class cguides extends Controller {

    //attribs
    var $models = array('guides');

    public function index() {
        $data['guides'] = $this->guides->find();
        $this->set($data);
        $this->render('index');
    }

    public function read($id) {
        $categorie = new voyages();
        $this->guides->read($id);
        $data['voyages'] = $this->guides->totable();
        $this->set($data);
        $this->render('read');
    }

    public function create() {
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";

        $this->guides->setIdVoyages(NULL);
        $this->guides->setDatedebutVoyages($_POST['datedebut_voyages']);
        $this->guides->setDatefinVoyages($_POST['datefin_voyages']);
        $this->guides->setNbetudiantsVoyages($_POST['nbetudiants_voyages']);
        $this->guides->setVilledepartVoyages($_POST['villedepart_voyages']);
        $this->guides->setVilledarriveeVoyages($_POST['villedarrivee_voyages']);
        $this->guides->setBudgetVoyages($_POST['budget_voyage']);
        $this->guides->create();
        $this->index();
    }


    public function fcreate(){

        $this->render('fcreate');
    }


    public function fupdate($id){
        $this->voyages->read($id);
        $data['voyages'] = $this->voyages->totable();
        $this->set($data);

        $this->render('fupdate');
    }

    public function update($id) {
        //var_dump($_POST);
        $this->voyages->setIdVoyages('');
        $this->voyages->setDatedebutVoyages($_POST['datedebut_voyages']);
        $this->voyages->setDatefinVoyages($_POST['datefin_voyages']);
        $this->voyages->setNbetudiantsVoyages($_POST['nbetudiants_voyages']);
        $this->voyages->setVilledepartVoyages($_POST['villedepart_voyages']);
        $this->voyages->setVilledarriveeVoyages($_POST['villedarrivee_voyages']);
        $this->voyages->setBudgetVoyages($_POST['budget_voyage']);
        $this->voyages->update($id);
        $this->index();
    }

    public function delete($id){
        //$this->categorie->read($id);
        $this->voyages->delete($id);
        $this->index();

    }
}
?>