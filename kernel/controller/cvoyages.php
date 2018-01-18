<?php
require_once(DIR_CTRL.'/controller.php');
//require(DIR_CORE.'class/classCategories.php');
class cdestinations extends Controller {

    //attribs
    var $models = array('destinations');

    public function index() {
        $data['destinations'] = $this->destinations->find();
        $this->set($data);
        $this->render('index');
    }

    public function read($id) {
        $categorie = new destinations();
        $this->destinations->read($id);
        $data['destinations'] = $this->destinations->totable();
        $this->set($data);
        $this->render('read');
    }

    public function create() {
        $this->destinations->setMatriculeCategorie($_POST['destinations']);
        $this->destinations->setLibelleCategorie($_POST['destinations']);
        $this->destinations->setPuKm($_POST['destinations']);
        $this->destinations->setPuRepas($_POST['pu_destinations']);
        $this->destinations->create();
        $this->index();
    }


    public function fcreate(){

        $this->render('fcreate');
    }


    public function fupdate($id){
        $this->destinations->read($id);
        $data['destinations'] = $this->destinations->totable();
        $this->set($data);

        $this->render('fupdate');
    }

    public function update($id) {
        //var_dump($_POST);
        $this->destinations->setMatriculeCategorie('');
        $this->destinations->setLibelleCategorie($_POST['libelle_categorie']);
        $this->destinations->setPuKm($_POST['pu_km']);
        $this->destinations->setPuRepas($_POST['pu_repas']);
        $this->destinations->update($id);
        $this->index();
    }

    public function delete($id){
        //$this->categorie->read($id);
        $this->destinations->delete($id);
        $this->index();

    }
}
?>