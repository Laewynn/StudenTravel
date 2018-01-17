<?php
class Controller {

	var $viewvar = array();
	var $layout = 'default';

	function __construct(){
		if(isset($_POST)){
			$this->data = $_POST;
		}
		if(isset($this->models)){
			foreach ($this->models as $v) {
				$this->loadModel($v);
			}
		}
	}


	public function loadModel($name){// recupère la class 
		require_once(DIR_MODL.strtolower($name).'.php');
		$this->$name = new $name();
	}


	public function set($data){// recupère les données
		$this->viewvar = array_merge($this->viewvar, $data);
	}

	/**
	* appelle la vue associée pour affichage 
	* @param $script le nom de la vue à afficher
	*/
	public function render ($script){
		extract ($this->viewvar);
		ob_start();
		require(DIR_VIEW.get_class($this).'/'.$script.'.html');
		$content = ob_get_clean();
		require(DIR_VIEW.'layout/'.$this->layout.'.php');
	}

	/**
	* Vient 
	public function render($filename){ // recupère la vue
		$view = DIR_VIEW.get_class($this).'/'.$filename.'.tpl';
		if(file_exists($view)){
			extract($this->vars); // vars tableau : contient donnée du controller 
			ob_start(); // instruction qui permet de temporiser l'affichage 
			require($view);
			$content_for_layout = ob_get_clean();
			if($this->layout == false){
				echo $content_for_layout;
			}else {
				if(file_exists(DIR_VIEW.'layout/'.strtolower($this->layout).'.tpl')){
					require_once(DIR_VIEW.'layout/'.strtolower($this->layout).'.tpl');
				}else{
					echo 'Layout "'. $this->layout .'" introuvable.';
				}
			}
		}else{
			echo 'Vue "'. strtolower($filename) .'" introuvable.';
		}
	}*/
}
?>