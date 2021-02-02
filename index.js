/* let prenom = "Hugo";
alert(`Hello ${prenom} !`);
*/
/*
let age = prompt("Quel Ã¢ge avez vous ?");

function verifAge() {
    if (age >= 18) {

        alert("Vous Ãªtes majeur");
    } else {
        alert("Vous Ãªtes mineur");
    }
}
*/

function isMessageSet() {

    let nom = document.forms["contact"]["lastName"].value;
    let message = document.forms["contact"]["message"].value;
    if(message == null || message == "" && nom =="" || nom == null){
        alert("Votre message et vide inconnu");
    }
    else if(message == null || message == ""){
        alert(`${nom} ton message est vide`);
    }

    return false;
}