<?php 

	foreach($categorie as $k => $v) {
		echo '</br><b>Id : </b>'.$v['matricule_categorie'].'</br></br>
		<b>Pseudo : </b>'.$v['libelle_categorie'].'</br></br>
		<b>Mdp : </b>'.$v['pu_km'].'</br></br>
		<b>Email : </b>'.$v['pu_repas'].'</br></br>';

	
		echo '<a href="'.DIR_WEBROOT.'ccategorie/fupdate/'.$v['matricule_categorie'].'"><input type="submit" value="Modifier"/></a><a href="'.DIR_WEBROOT.'ccategorie/delete/'.$v['matricule_categorie'].'"><input type="submit" value="Supprimer"/></a>';
	}

	
	
?>
?>