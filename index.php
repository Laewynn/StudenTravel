
<?php
define('DIR_WEBROOT', str_replace('index.php','', $_SERVER['SCRIPT_NAME']));
define('DIR_ROOT', str_replace('index.php','', $_SERVER['SCRIPT_FILENAME']));

define('DIR_CTRL',DIR_ROOT .'kernel/controller/');
define('DIR_CORE',DIR_ROOT . 'kernel/');
define('DIR_MODL',DIR_ROOT .'kernel/class/');
define('DIR_VIEW',DIR_ROOT .'kernel/view/');
define('DIR_CSS',DIR_WEBROOT.'css/');
define('DIR_JS', DIR_WEBROOT.'js/');
define('DIR_IMG', DIR_WEBROOT.'img/');

//require_once ('conf/configbdd.php');

	if (!empty($_GET['p'])){ // pwet = paramètres
		$pwet = explode('/',$_GET['p']); // crée un tableau ce qu'il y a dans 'p' 
		$controller = $pwet[0];
		if(isset($pwet[1])){
			$action = $pwet[1];

		}else{
 
			$action = 'index'; // Pas de paramètre cela renvoie vers index
		}
	}else{
		$controller = 'cindex';
		$action = 'index';
	}
	if(isset($pwet[2])){
		$id = $pwet[2];
		require_once(DIR_CTRL . $controller .'.php');
		$temp = $controller;
		$controller = new $temp();
		if(method_exists($controller, $action)){
			unset($pwet[0]);
			unset($pwet[1]);
			//call_user_func_array(array($controller, $action).$pwet);
		}
		$controller->$action($id);

	}else{
		require_once(DIR_CTRL . $controller .'.php');
        //var_dump($controller);
		$controller = new $controller();

		$controller->$action();
	}
?>