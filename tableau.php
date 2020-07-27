<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/style.css">
    <title>Tableaux | HTML 5</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid #000000;
        }
    </style>
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
    
<body>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>ID</th>
                    <th>Catégorie</th>
                    <th>Libellé</th>
                    <th>Prix</th>
                    <th>Couleur</th>
                </tr>
            </thead>
            <tr>
                <td><img src="jarditou_html_zip/jarditou_photos/7.jpg" alt="img 7" width="150" height="150"></td>
                <td>7</td>
                <td>Barbecues</td>
                <td>Aramis</td>
                <td>110.00€</td>
                <td>Noir</td>
            </tr>
            <tr>
                <td><img src="jarditou_html_zip/jarditou_photos/8.jpg" alt="img 8" width="150" height="150"></td>
                <td>8</td>
                <td>Barbecues</td>
                <td>Athos</td>
                <td>249.99€</td>
                <td>Noir</td>
            </tr>
            <tr>
                <td><img src="jarditou_html_zip/jarditou_photos/11.jpg" alt="img 11" width="150" height="150"></td>
                <td>11</td>
                <td>Barbecues</td>
                <td>Clatronic</td>
                <td>135.90€</td>
                <td>Chrome</td>
            </tr>
            <tr>
                <td><img src="jarditou_html_zip/jarditou_photos/12.jpg" alt="img 12" width="150" height="150"></td>
                <td>12</td>
                <td>Barbecues</td>
                <td>Camping</td>
                <td>88.00€</td>
                <td>Noir</td>
            </tr>
            <tr>
                <td><img src="jarditou_html_zip/jarditou_photos/13.jpg" alt="img 13" width="150" height="150"></td>
                <td>13</td>
                <td>Brouette</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>