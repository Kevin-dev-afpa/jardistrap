var formValid = document.getElementById("bouton_envoi");

var nom = document.getElementById("name");
var missNom = document.getElementById("missNom");
var nomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

var prenom = document.getElementById("Prenom");
var missPrenom = document.getElementById("missPrenom");
var prenomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

var date = document.getElementById("date");
var missDate = document.getElementById("missDate");
var dateValid = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;

var mail = document.getElementById("mail");
var missMail = document.getElementById("missMail");
var mailValid = /^(.+)@(.+)$/;

var code = document.getElementById("code");
var missCode = document.getElementById("missCode");
var codeValid = /[0-9]+[0-9]+[0-9]+([0-9]+[0-9])?$/;

var ville = document.getElementById("ville");
var missVille = document.getElementById("missVille");
var villeValid = /^([a-zA-ZéèîïÉÈÎÏêàçîï]+([-'\s])?[a-zA-ZéèîïÉÈÎÏêàçîï]*)+$/

formValid.addEventListener("click", validation);

function validation(event) {
  if (nom.validity.valueMissing) { //Si le champ nom est vide
    event.preventDefault();
    missNom.textContent = "Nom manquant";
    missNom.style.color = "red";

  } else if (nomValid.test(nom.value) == false) { //Si le format nom est incorrect
    event.preventDefault();
    missNom.textContent = "Format incorrect";
    missNom.style.color = "orange";
  }
  if (prenom.validity.valueMissing) { //Si le champ prénom est vide
    event.preventDefault();
    missPrenom.textContent = "Prénom manquant";
    missPrenom.style.color = "red";

  } else if (prenomValid.test(prenom.value) == false) { //Si le format de données prénom est incorrect
    event.preventDefault();
    missPrenom.textContent = "Format incorrect";
    missPrenom.style.color = "orange";
  }
  if (date.validity.valueMissing) { //Si le format date est vide
    event.preventDefault();
    missDate.textContent = "Date manquante";
    missDate.style.color = "red";
  } else if (dateValid.test(date.value) == false) { //Si le format date est incorrect
    event.preventDefault();
    missDate.textContent = "Format incorrect";
    missDate.style.color = "orange";
  }
  if (mail.validity.valueMissing) { //Si le champ email est vide
    event.preventDefault();
    missMail.textContent = "mail manquant";
    missMail.style.color = "red";

  } else if (mailValid.test(mail.value) == false) { //Si le format de données email est incorrect
    event.preventDefault();
    missMail.textContent = "Format incorrect";
    missMail.style.color = "orange";
  }

  if (code.validity.valueMissing) { //Si le champ code postal est vide
    event.preventDefault();
    missCode.textContent = "Code postal manquant";
    missCode.style.color = "red";

  } else if (codeValid.test(code.value) == false) { //Si le format code postal est incorrect
    event.preventDefault();
    missCode.textContent = "Format incorrect";
    missCode.style.color = "orange";

  } if (ville.validity.valueMissing) { //Si le champ ville est vide
    event.preventDefault();
    missVille.textContent = "Ville manquant";
    missVille.style.color = "red";
    
  } else if (villeValid.test(ville.value) == false) { //Si le format ville est incorrect
    event.preventDefault();
    missVille.textContent = "Format incorrect";
    missVille.style.color = "orange";
  }
}

