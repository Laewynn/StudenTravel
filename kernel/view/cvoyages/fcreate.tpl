
<!--  if (empty($POST['$affichage']) matrciule_categorie && $libelle_categorie && $pu_km && $pu_repas)) {
    echo 'les éléments sont vides ! ';
else { -->

<form action=<?php echo DIR_WEBROOT.'cvoyages/create';?> method="post">
<div id="erreur">
    <p>Vous n'avez pas rempli correctement les champs du formulaire !</p>
</div>

    <fieldset id="formulaire">
        <table id="tableau">
        <legend> Création d'une catégorie </legend> <!-- Titre du fieldset -->
        <tr>
            <td id="libelle">Matricule :</td>
            <td><input id="champ"type="text" name="matricule_categorie" * /></td>
        </tr>

        <tr>
            <td id="libelle">Libellé : </td>
            <td><input id="champ" type="text" name="libelle_categorie"/></td>
        </tr>

            <tr>
                <td id="libelle" >Prix unitaire du kilomètre :</td>
                <td><input id="champ" type="text" name="pu_km"/></td>
            </tr>

        <tr>
            <td id="libelle" >Prix unitaire du repas :</td>
            <td><input id="champ" type="text" name="pu_repas" onkeyup="verif()" /></td>
        </tr>
        </table>
    </fieldset>
<br/>
<table id="bouton">
    <tr>
         <td>  <input class="bouton" type="submit" value="OK"/></td>
         <td>  <button class="bouton" type="button" onclick="redirect()">Retour</button></td>
    </tr>
</table>

</form>

<script>
    function redirect(){
        window.location.href = "<?php echo DIR_WEBROOT; ?>ccategorie/index";
    }

    $(function(){
        $( ".bouton" ).button();
    });
</script>

