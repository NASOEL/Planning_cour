document.getElementById("inscription").addEventListener("submit" ,function(e){
 e.preventDefault();
    var erreur;
    var prenom = document.getElementById("prenom");
    var nom = document.getElementById("nom");
    var email = document.getElementById("email");
    var statut = document.getElementById("statut");
    var telephone = document.getElementById("telephone");
    if (!telephone.value) {
        erreur = "veuiller remplir telephone"
    }
    if (!statut.value) {
        erreur = "veuiller remplir statut"
    }
    if (!email.value) {
        erreur = "veuiller remplir email"
    }
    if (!nom.value) {
        erreur = "veuiller remplir nom"
    }
    if(!prenom.value){
        erreur = "veuiller remplir prenom"
    }
    
    if(erreur){
        e.preventDefault();
        document.getElementById("erreur").innerHTML=erreur;
        return false;
    }else{
        alert('inscription reussie  un mail vous  a été envoyez !');
        return false;
    }


});