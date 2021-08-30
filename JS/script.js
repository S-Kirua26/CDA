function validation() { // fonction permettant d'interdir l'envoie des données tant que les champs ne sont pas valide
    valider.disabled = false;
    for (let i = 0; i < listeInputs.length; i++) {
        let input = listeInputs[i];
        if (!verifInput(input)) {
            valider.disabled = true;
        }
    }
}

function verification(event) { // fonction permettant de vérifier la validité des différents champs
    var monInput = event.target;
    verifInput(monInput);
    validation(); // permet d'appeler la fonction validation aprés que les données soit enregistré
}

function verifInput(monInput) {
    var message = (monInput.parentNode).getElementsByClassName("message")[0];
    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        message.innerHTML = "champ manquant";
        return false;
    } else if (!monInput.checkValidity()) {
        message.innerHTML = "format incorrect";
        monInput.style.class = "incorrect";
        return false;
    } else {
        message.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
        return true;
    }
}

var nomVille = document.getElementById("nomVille");
var numeroDepartement = document.getElementById("numeroDepartement");
var codePostal = document.getElementById("codePostal");
var dateMAJ = document.getElementById("dateMAJ");
var listeInputs = document.getElementsByTagName("input");
var inputsAVerifier = document.querySelectorAll("input[verifInput]");
// Valeur Inputs
for (let i = 0; i < inputsAVerifier.length; i++) {
    inputsAVerifier[i].addEventListener("input", verification);   
}


