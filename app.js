document.getElementById("inscription").addEventListener("submit", function(e){
    e.preventDefault();

    var erreur;
    var nom = document.getElementById("nom")
    var prenom = document.getElementById("prenom")
    var date = document.getElementById("date")
    var code = document.getElementById("code")
    var ville = document.getElementById("ville")
    var mail = document.getElementById("mail")

    if (!nom.value) {
        erreur = "Veuillez renseigner un nom";
    }
    if (!prenom.value) {
        erreur = "Veuillez renseigner un prénom";
    }
    if (!date.value) {
        erreur = "Veuillez renseigner une date";
    }
    if (!code.value) {
        erreur = "Veuillez renseigner votre code postal";
    }
    if (!ville.value) {
        erreur = "Veuillez renseigner votre ville";
    }
    if (!mail.value) {
        erreur = "Veuillez renseigner votre mail";
    }
    
    alert("Formulaire envoyé !");
})