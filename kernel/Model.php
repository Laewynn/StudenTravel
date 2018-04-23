<?php
/**
* Le fichier PHP fait partie du projet Forum
* Il sert à définir la classe Model avec son constructeur
* et ses fonctions génériques
* La classe Model est une classe abstraite 
* @datedernièremodification : 14 octobre 2016
* @since 20 septembre 2016
* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
*/


/**
 * La classe Model permet de gérer la table client du projet PRESTINFO
 *
 * @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
 */
	abstract class Model{
		// déclaration des attributs techniques
        protected $table;
		protected $pk;
        protected $autoincrement;
		protected $attributech;
        protected $fk;
        // attributech sert à lister quels sont les attributs non-métiers (attributs de la classe où on travaille pas directement): donc les attributs qui ne correspondent à rien dans la table

    private function doBelongsToAssoc(){
        foreach($this->fk as $cle=>$valeur){
            $id = $this->$valeur;
            require('class/'.$cle.'.php');
            $this->$valeur = new $cle();
            $this->$valeur->read($id);
        }
    }
	
    // Constructeur de la classe Model
	public function __construct($table, $pk, $autoincrement, $fk){
		$this->table = $table;
		$this->pk = $pk;
        $this->autoincrement= $autoincrement;
        $this->attributech = array('table', 'pk','autoincrement','attributech', 'fk'); // pour ne pas les utilisers les attributs techniques des requêtes
        $this->fk = $fk;
	}
    
    /**
    * Fonction qui sert à la connexion de la base de données
    * @param $id = la clé primaire de l'utilisateur 
    * @return $bdd = la base de données 
    *
    * @author MARCHAND Laëtitia
    * @date 23/09/16
    **/
    protected function connexion(){
    	$host = 'localhost';
    	$dbname = 'studentravel';
    	$user='root';
    	$mdp='';

        try {
            $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $mdp);
        } catch(PDOException $e){
            echo "Erreur connexion ! :".$e->getMessage();
        }
        return $bdd;

    }
    /**
    * Fonction qui sert créer les lignes de la table génériquement
    *
    * @author MARCHAND Laëtitia
    * @date 07/10/16
    */
    /*
    public function create(){
		$proprietes="";
		$valeurs="";
		//print_r($this);
		
        /**
        * Insertion dans la requête des noms de colonnes
        * Conditions : - le nom de la colonne ne doit pas faire partie des attributs techniques (ce qu'on as noté dans $attributech)
        *          

        if($this->autoincrement){ // si la clé primaire est en auto-incrément, 
            $this->attributech[] = $this->pk; // ALORS on l'ajoute dans le tableau des attributs techiniques, comme ça , elle ne sera pas ajoutée dans la requête
        }
        foreach($this as $nomColonne=>$valeurColonne){ // Pour chaque ligne dans le tableau
			if (!in_array($nomColonne, $this->attributech)){ // Si les lignes du nom de la colonne et les attributs techniques ne sont pas dans le tableau
                $proprietes = $proprietes . " " . $nomColonne . ",";   // pour que toutes les propriétés soit mises côtes à côtes séparées par des virgules                          
                $valeurs = $valeurs . " '" . str_replace("'", "''", $valeurColonne) . "',";    // pour que toutes les valeurs soit mises côtes à côtes séparées par des virgules

            }

        
		}
        $proprietes = substr($proprietes, 0, -1); // suppression de la dernière virgule
        $valeurs = substr($valeurs, 0, -1);
        /* echo "Propriétés : $proprietes<br/>";
        echo "Valeurs : $valeurs <br/> <br/>";
		*/
    /*
        $sql="INSERT INTO {$this->table} ($proprietes) VALUES ($valeurs)";
         echo "<br/> Création de la ligne <br/> " . "Requête : " . $sql;
        
        $bdd= $this->connexion();
        $bdd->query($sql);
        $bdd = null;

	/*	// Début de la requête
       $sql= "INSERT INTO {$this->table} (";   
        
        // Remplissage des noms des Colonnes
        $premierevaleur=true;
        foreach ($nomColonnes as $value) {
        	 	$sql="$sql $value ,";	 
        }
		
		$sql= substr($sql, 0, -1); // Suppression du dernier caractère (donc la virgule qui est en trop)
        
        // Milieu de la requête
        $sql="$sql) VALUES (";

        // Remplissage des valeurs à insérer
        $premierevaleur=true;
        foreach ($valeursAInserer as $value) {
        	 	$sql="$sql '$value' ,";
        }
        $sql= substr($sql, 0, -1); // Suppression du dernier caractère (donc la virgule qui est en trop)

    } 

*/
        public function create(){
            $listeProprietes = "";
            $listeValeurs = "";

            if($this->autoincrement){
                /*
                *  SI la clé primaire est en auto-incrément
                *  ALORS on l'ajoute dans le tableau des attributs techniques, comme ça,
                *  elle ne sera pas ajoutée dans la requête
                */
                $this->attributech[] = $this->pk;
            }

            /*
            * Insertion dans la requête des noms de colonne
            * 	- SI on n'est pas en train de regarder un attribut technique
            *		(donc si le nom de l'attribut sur la ligne en cours ne fait pas partie des noms d'attribut
            *		 qu'on a notés dans le tableau où on a noté les attributs techniques (le tableau $attribtech) )
            */
            foreach ($this as $unNomColonne=>$uneValeurColonne){
                if(!in_array($unNomColonne, $this->attributech) && !is_null($uneValeurColonne)){
                    // Pour la requete d'insertion :
                    $listeProprietes .= $unNomColonne . " ,";
                    $listeValeurs .= $this->formaterChaineEnSQL($uneValeurColonne) . " ,";
                }
            }

            $listeProprietes = substr($listeProprietes, 0, -1);		// Suppression de la dernière virgule
            $listeValeurs = substr($listeValeurs, 0, -1);			// Suppression de la dernière virgule


            $reqIns = "INSERT INTO {$this->table} ($listeProprietes) VALUES ($listeValeurs)";

            echo "<br/>model::create() -> \$reqIns : <br/>" . $reqIns . "<br/>";


            $base = $this->connexion();
            if(!$base->exec($reqIns)){
                print_r($base->errorInfo());
            }



            /*
             * Si la PK est en un ID en auto-incrément, alors on récupère l'ID de l'enregistrement tout juste créé
             * et on l'affecte à la propriété <clé primaire> de l'objet
             */
            if($this->autoincrement){
                $this->{$this->pk} = $base->lastInsertId($this->table . "_" . $this->pk . "_seq");
            }

            $base = null;
        }





        /**
    * Fonction qui sert à lire les lignes de la table génériquement
    * @param $id = la clé primaire de l'utilisateur 
    * @return $result = toutes les valeurs du nom des colonnes de la base
    *
    * @author MARCHAND Laëtitia
    * @date 30/09/16
    */
    public function read($id) {
        

        $sql = "SELECT * FROM {$this->table} WHERE {$this->pk}= '{$id}'";
   	    // echo $sql;
        $bdd= $this->connexion();
        $rep= $bdd->query($sql);
        $result= $rep->fetch(PDO::FETCH_ASSOC); 
        $bdd = null;
	
		// Assignation des valeurs récupérées aux attributs de l'objet
	
		// Remplacé par le foreach en-dessous qui parcourt automatiquement les colonnes de la table en même temps qu'il parcourt les attributs de l'objet
        /* $this->ID_Utilisateur= $result["id_utilisateur"];
        $this->Pseudo_Utilisateur=$result["pseudo_utilisateur"];
        $this->Email_Utilisateur=$result["email_utilisateur"];
        $this->MDP_Utilisateur=$result["mdp_utilisateur"]; */

        // Affichage
        /*
        print_r($result);
        echo '<br/> <br/> <br/>';
        print_r ($this);
        echo '<br/> <br/> <br/>';
        */
        
        foreach($result as $nomColonne=>$val){ // Pour chaque colonne ça affecte une valeur
        	$this->$nomColonne = $val;
        	
        }

        if($this->fk != null){
            $this->doBelongsToAssoc();
        }

        return $result;
    }

    

     /**
    * Fonction qui sert à lire les lignes de la table génériquement
    * @param $id = la clé primaire de l'utilisateur 
    * @return $result = toutes les valeurs du nom des colonnes de la base
    *
    * @author MARCHAND Laëtitia
    * @date 30/09/16
    */
    // Trouver un enregistrement en fonction d'un paramètre génériquement
    public function find ($condition = null){
        $sql = "SELECT * FROM {$this->table}";

        if($condition != null){
            $sql += "WHERE {$condition}";
        }


    	//echo $sql;
    	$bdd= $this->connexion();
    	$sql=$bdd->query($sql);
        $bdd = null;

    	
        $tab = null;
    	// Tant qu'il y'as un résultat ça continue à lire
    	while ($resultat=$sql->fetch(PDO::FETCH_ASSOC)){
    	// print_r($sql);
    	$tab[]=$resultat;
   		}
    	return $tab;
    }


    /**
    * Fonction qui sert à mettre à jour les lignes de la table génériquement
    * @param $id = identifiant 
    * 
    * @author MARCHAND Laëtitia
    * @date 07/10/16
    */
    public function update($id){
        $propriete = "";
        $valeur = "";

        if($this->autoincrement){ // si la clé primaire est en auto-incrément, 
            $this->attributech[]=$this->pk; // ALORS on l'ajoute dans le tableau des attributs techiniques, comme ça , elle ne sera pas ajoutée dans la requête
        }


        foreach($this as $nomColonne=>$valeur){
            // Permet d'ajouter à la requête seulement les attributs utiles de l'objet
            if (!in_array($nomColonne, $this->attributech) && $nomColonne != $this->pk){

            $propriete=$propriete. $nomColonne ."='". str_replace("'", "''", $valeur)."'," ;
            }
        }

      
        /*
        * On a accès au NOM de la clé primaire, mais pas sa VALEUR. enfin pas directement. Mais on en a besoin dans la requête pour le WHERE
        * On veut donc écrire, par exemple :
        * $this->idutilisateur;
        * Mais on n'as pas le idutilisateur, puisqu'on ne sait pas si on est sur un utilisateur, un sujet... vu qu'ici, on reste générique.
        * (en gros, ça peut être idutilisateur, idsujet, idpost,  idnimportequoienfait, on ne peut pas le deviner d'ici)
        * 
        * Alors astuce : $this->pk nous donne le nom de la PK. donc , on va utiliser ça pour faire en sorte que le PHP écrive :
        *                $this_>idutilisateur;
        * Voilà donc ce qu'il va se passer : $this->{$this->pk}}
        *                                    = $this->idutilisateur;
        *                                     = 1  
        * Et c'est fini !
        */      
        $valeurpk = "{$id}";
        $sql= "UPDATE {$this->table} SET ";
         $sql = $sql . $propriete;
        $sql = substr($sql, 0, -1); 
        $sql = $sql ." WHERE $this->pk = '$valeurpk'";
        echo " <br/> Mise à jour de la table : <br/> " . $sql;

        $bdd = $this->connexion();
        $sql= $bdd->prepare($sql);
        
        $sql->execute();
        $bdd = null;
    }


    /**
    * Fonction qui supprime les lignes de la table génériquement
    * @param $id = identifiant
    * @author MARCHAND Laëtitia
    * @date 07/10/16
    */
	public function delete($id){
        $bdd = $this->connexion();

        $req= "DELETE FROM {$this->table} WHERE {$this->pk} = '{$id}'";
        $sql= $bdd->prepare($req);

       	$sql->execute();
       	$bdd = null;
         //echo " <br/> Supprimer une ligne de la table : <br/> " .$req;
        
    }

    public function totable() {
        $nom = get_class($this);
        $tmp = array();
        foreach ($this as $key => $val) {
            $tmp[$key] = $val;
        }
        $data = array();
        $data[$nom] = $tmp;
        return $data;
    }



/*
	* formaterChaineEnSQL -	Formate une chaîne pour l'écrire dans des requêtes SQL sans problème :
	*					- transforme les booléens en " TRUE " ou " FALSE "
	*					- transforme les chaînes vides en NULL
	*					- transforme les chaînes pour supprimer les caractères sensibles (comme des apostrophes) en caractères HTML
	*/
public function formaterChaineEnSQL($chaineAFormater){
    if(is_bool($chaineAFormater)){
        $nouvelleChaine = $chaineAFormater ? " TRUE " : " FALSE";
    }else{
        if($chaineAFormater == ''){
            $nouvelleChaine = " NULL ";
        }else{
            $nouvelleChaine = " '" .  htmlspecialchars($chaineAFormater, ENT_QUOTES) . "' ";
        }
    }

    return $nouvelleChaine;
}

    }

?>