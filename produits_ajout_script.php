<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Vérification des informations du formulaire</title>
    </head>
    <body>

    <?php
    // Récupération des connexions à la base de donnée
    include "connexion_bdd.php";
    $db = connexionBase();
    var_dump($db);
    

    //     Récupération des différentes valeurs     //
    //$pro_id = $_POST['pro_id'];
    $pro_cat_id = $_POST['pro_cat_id'];
    $pro_ref = $_POST['pro_ref'];
    $pro_libelle = $_POST['pro_libelle'];
    $pro_description = $_POST['pro_description'];
    $pro_prix = $_POST['pro_prix'];
    $pro_stock = $_POST['pro_stock'];
    $pro_couleur = $_POST['pro_couleur'];
    $pro_photo = $_POST['pro_photo'];
    $pro_d_ajout = $_POST['pro_d_ajout'];
    $pro_d_modif = $_POST['pro_d_modif'];
    

    //     Vérification si les champs ne sont pas vide     //


    if(isset($pro_cat_id) AND !empty($pro_cat_id)){
        echo "<p>Merci d'avoir renseigné la catégorie du produit</p>";
        echo $pro_cat_id;
        var_dump($pro_cat_id);
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la catégorie du produit</p>";
    }
    
    if(isset($pro_ref) AND !empty($pro_ref)){
        echo "<p>Merci d'avoir renseigné la référence du produit</p>";
        echo $pro_ref;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la référence du produit</p>";
    }
    
    if(isset($pro_libelle) AND !empty($pro_libelle)){
        echo "<p>Merci d'avoir renseigné le libellé du produit</p>";
        echo $pro_libelle;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné le libellé du produit</p>";
    }

    if(isset($pro_description) AND !empty($pro_description)){
        echo "<p>Merci d'avoir renseigné la description du produit</p>";
        echo $pro_description;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la description du produit</p>";
    }

    if(isset($pro_prix) AND !empty($pro_prix)){
        echo "<p>Merci d'avoir renseigné le prix du produit</p>";
        echo $pro_prix;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné le prix du produit</p>";
    }

    if(isset($pro_stock) AND !empty($pro_stock)){
        echo "<p>Merci d'avoir renseigné la quantité de produit</p>";
        echo $pro_stock;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la quantité de produit</p>";
    }

    if(isset($pro_couleur) AND !empty($pro_couleur)){
        echo "<p>Merci d'avoir renseigné la couleur du produit</p>";
        echo $pro_couleur;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la couleur du produit</p>";
    }

    if(isset($pro_photo) AND !empty($pro_photo)){
        echo "<p>Merci d'avoir renseigné le format du produit</p>";
        echo $pro_photo;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné le format du produit</p>";
    }

    if(isset($pro_d_ajout) AND !empty($pro_d_ajout)){
        echo "<p>Merci d'avoir renseigné la date d'ajout du produit</p>";
        echo $pro_d_ajout;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la date d'ajout du produit</p>";
    }

    if(isset($pro_d_modif) AND !empty($pro_d_modif)){
        echo "<p>Merci d'avoir renseigné la date de modification du produit</p>";
        echo $pro_d_modif;
    }
    else{
        echo "<p>Vous avez oubliez de renseigné la date de modification du produit</p>";
    }


    //     Ajout des valeurs dans la base de donnée     //

    // if(isset($pro_cat_id) AND !empty($pro_cat_id) AND isset($pro_ref) AND !empty($pro_ref) AND isset($pro_libelle) 
    // AND !empty($pro_libelle) AND isset($pro_description) AND !empty($pro_description) AND isset($pro_prix) AND !empty($pro_prix) AND isset($pro_stock) AND !empty($pro_stock)
    // AND isset($pro_couleur) AND !empty($pro_couleur) AND isset($pro_photo) AND !empty($pro_photo) AND isset($pro_d_ajout) AND !empty($pro_d_ajout) 
    // AND isset($pro_d_modif) AND !empty($pro_d_modif)){
        $sql = "INSERT INTO produits(`pro_cat_id`, `pro_ref`, `pro_libelle`, `pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_d_modif`) 
        VALUES ('".$pro_cat_id."', '".$pro_ref."', '".$pro_libelle."', '".$pro_description."', '".$pro_prix."', '".$pro_stock."', '".$pro_couleur."', '".$pro_photo."', '".$pro_d_ajout."', '".$pro_d_modif."')";
 
 echo $sql."<br>";
 
 if ($db->exec($sql)) 
 {
     echo "Le produit à bien été ajouté !";
 }
 else 
 {    
     echo"Echec de l'ajout en base";
 }
    ?>