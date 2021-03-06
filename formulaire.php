<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">
    <!-- Mettre le lien css APRES BootStrap -->
    <title>Contact</title>
</head>



<div class="container">
    <div class="row">

        <div class="col-6"><img src="jarditou_html_zip/images/jarditou_logo.jpg" alt="Logo Jarditou" id="logoJarditou" class="logo"></div>
        <div class="col-6 mt-5">
            <h3>Tout le jardin</h3>
        </div>

        <!-- Configuration du menu Navbar -->
        <nav id="navabr" class="col-12 navbar-expand-sm navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavBar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="Tableau.php">Tableau</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>

        <!-- Bande sur la promotion -->
        <div class="col-12"><img src="jarditou_html_zip/images/promotion.jpg" alt="Promotion" class="promotion"></div>

        <!-- Début du formulaire -->
        <form action="produits_ajout.php" method="POST" class="col-12">
            <div class="form-group">
                <p>* Ces zones sont obligatoires</p>

                <legend>Vos coordonnées</legend>
                <div class="row">
                    <div class="col">
                        <!-- Avec form-control dans "class", on peut mettre deux labels l'un à côté de l'autre (en ligne, en définissant la div "row" auparavant -->

                        <!-- Mise en place du nom -->
                        <label for="Nom">Votre Nom* :</label> <input type="text" name="nom" id="nom"
                            class="form-control" required>
                        <span id="nom_manquant"></span>
                    </div>

                    <!-- Mise en place du prénom -->
                    <div class="col">
                        <label for="Prénom">Votre Prénom* : </label><input type="text" name="prenom" id="prenom"
                            class="form-control" required>
                        <span id="prenom_manquant"></span>
                    </div>
                </div>
                <br>

                <!-- Mise en place du genre -->
                <label for="Sexe">Sexe* : </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="Féminin" required> <label
                        class="form-check-label" for="Féminin">Féminin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="Masculin" required> <label
                        class="form-check-label" for="Masculin">Masculin</label><br>
                    <span id="sexe_manquant"></span>
                </div>
                <!-- Mise en place de la date -->
                <!-- Lorsque l'on définit un type en date, le déroulement du calendrier sur l'étiquette s'installe automatiquement -->
                <br>
                <div> <label for="DatedeNaissance"> Date de Naissance* : </label><input type="date"
                        name="Date de Naissance" id="date" class="form-control col-8" required>
                </div>
                <span id="date_manquant"></span>
                <br>
                <!-- Mise en place de l'adresse -->
                <div><label for="adresse"> Adresse* :</label><input type="text" name="adresse" id="adresse"
                        class="form-control col-8" required>
                    <span id="adresse_manquant"></span></div>
                <br>

                <!-- Mise en place du code postal -->
                <div><label for="CodePostal"> Code postal* : </label><input type="text" name="Code postal"
                        id="codepostal" class="form-control col-8" required>
                    <span id="code_manquant"></span></div>
                <br>

                <!-- Mise en place de la ville -->
                <div><label for="Ville"> Ville : </label><input type="text" name="Ville" id="ville"
                        class="form-control col-8" required></div>
                <span id="ville_manquant"></span>
                <br>

                <!-- Mise en place de l'email -->
                <div><label for="Email"> Email* :</label> <input type="email" name="Email"
                        placeholder="dave.loper@afpa.fr" id="mail" class="form-control col-8" required>
                    <span id="mail_manquant"></span></div>
                <legend>Votre demande</legend>

                <!-- Section sur la question -->

                <!-- Mise en place du choix du sujet -->
                <label for="Sujet"> Sujet* :
                </label>
                <select name="sujet" size="1" id="sujet" class="form-control col-8" required>
                    <!-- La size 1 a été utilisée pour mettre l'étiquette à la même taille que les précédentes -->
                    <!-- Pour définir les options d'une liste en formulaire, il faut utiliser option et value -->
                    <option value="">--Veuillez choisir un sujet--</option>
                    <option value="MesCommandes">Mes commandes</option>
                    <option value="QuestionSurUnProduit">Question sur un produit</option>
                    <option value="Réclamation">Réclamation</option>
                    <option value="Autres">Autres</option>
                </select>
                <span id="sujet_manquant"></span>
                <br>

                <!-- Mise en place de la rédaction de la question -->
                <!-- Une zone de texte sera définie par textarea, utile pour les commentaires -->
                <div><label for="Question"> Votre question* :</label> <textarea name="VotreQuestion" id="question"
                        class="form-control col-8" required></textarea>
                    <span id="question_manquant"></span></div>
                <br>

                <!-- Bouton d'acceptation -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">J'accepte le traitement informatique de ce
                        formulaire</label>
                    <br>
                    <span id="bouton_manquant"></span></div>
                <br>

                <!-- Mise en place des boutons de soumission et d'annulation -->

                <!-- Afin de soumettre le formulaire lorsque l'utilisateur cliquera sur Envoyer, il faut définir l'input en type=submit -->
                <!-- Afin de réinitialiser le formulaire lorsque l'utilisateur cliquera sur Annuler, il faudra définir l'input en type=reset -->
                <p><input type="submit" name="Envoyer" value="Envoyer" id="bouton_envoi">
                    <input type="reset" name="Annuler" value="Annuler"></p>
            </div>
        </form>

        <footer class="col-12 p-3">

            <ul class="fin">
                <li>Mentions légales</li>
                <li>Horaires</li>
                <li>Plan du site</li>
            </ul>

        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </div>
</div>
<script src="script.js"></script>
</body>

</html>