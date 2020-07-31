<!DOCTYPE html>
<html lang="fr">

<head>
<title> Mon formulaire d'ajout de produit Jarditou </title>
</head>

<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=jarditou', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
    die();
}
$requete = $db->prepare("INSERT INTO produits(pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif, pro_bloque");
?>

<!-- Début du formulaire -->
<form action="produits_ajout_script.php" method="POST">



<!-- Demande de la catégorie -->
<p><label for="pro_cat_id">Ecrivez la catégorie du produit :</label> <input type="text" name="pro_cat_id" id="pro_cat_id"></p>

<!-- Demande de la référence -->
<p><label for="pro_ref">Ecrivez la référence du produit :</label> <input type="text" name="pro_ref" id="pro_ref"></p>

<!-- Demande du libelle -->
<p><label for="pro_libelle">Ecrivez le libelle du produit :</label> <input type="text" name="pro_libelle" id="pro_libelle"></p>

<!-- Demande de la description -->
<p><label for="pro_description">Ecrivez la description du produit :</label> <input type="area" name="pro_description" id="pro_description"></p>

<!-- Demande du prix -->
<p><label for="pro_prix">Ecrivez le prix du produit :</label> <input type="text" name="pro_prix" id="pro_prix"></p>

<!-- Demande du stock -->
<p><label for="pro_stock">Ecrivez le nombre de produit :</label> <input type="text" name="pro_stock" id="pro_stock"></p>

<!-- Demande de la couleur -->
<p><label for="pro_couleur">Ecrivez la couleur du produit :</label> <input type="text" name="pro_couleur" id="pro_couleur"></p>

<!-- Demande de la photo -->
<p><label for="pro_photo">Ecrivez le chemin de la photo du produit :</label> <input type="text" name="pro_photo" id="pro_photo"></p>

<!-- Demande de la date d'ajout -->
<p><label for="pro_d_ajout">Ecrivez la date d'ajout du produit :</label> <input type="date" name="pro_d_ajout" id="pro_d_ajout"></p>

<!-- Demande de la date de modification -->
<p><label for="pro_d_modif">Ecrivez la date de modification du produit :</label> <input type="date" name="pro_d_modif" id="pro_d_modif"></p>



<!-- Afin de soumettre le formulaire lorsque l'utilisateur cliquera sur Envoyer, il faut définir l'input en type=submit -->
<p><p><input type="submit" name="Envoyer" value="Envoyer" id="bouton_envoi"></p>

</form>