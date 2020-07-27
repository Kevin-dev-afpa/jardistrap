<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="Assets/style.css">
  <script src="app.js"></script>
  <title>Jarditou</title>
</head>
<!-- Insertion de l'en-tête -->
<?php
if (file_exists("entete.php"))
{
include("entete.php");
}
else
{
  echo "En-tête introuvable";
}
?>

<!-- Le corps -->
<div class="container-fluid">
    <div class="row">
      <div id="texte" class="col-md-8 col-6">
        <article>
          <h1>Accueil</h1>
          <hr>
          <h2>L'entreprise</h2>
          <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du
            paysagisme.</p>
          <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisé.</p>
          <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne,
            Abbeville, Corbie.</p>
          <h2>Qualité</h2>
          <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre
            projet.
          </p>
          <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
          <h2>Devis gratuit</h2>
          <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d'intervention. Vous
            souhaitez un devis? Nous vous le réalisons gratuitement.</p>
        </article>
      </div>
      <div id="colonne" class="col-md-4 col-6"> [COLONNE DROITE] </div>
    </div>
  </div>
  <!-- Fin de page -->

  <!-- Insertion du pied de page -->
  <?php
if (file_exists("pieddepage.php"))
{  
include("pieddepage.php");
}
else
{
  echo "Pied de page introuvable";
}
?>

</html>