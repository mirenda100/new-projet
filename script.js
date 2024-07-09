function valider(){
    let libellé = document.getElementById("libellé").value;
    let quantité = document.getElementById("quantité").value;
    let prix = document.getElementById("prix").value;
    if((libellé =="")||(quantité =="")||( prix =="")){
        alert("veuiller remplir les champ");
        return false;
    }
    if(nom.length<4){
        alert("veiller saisir un nom d'au moins quatre caractere");
        return false;
    }
    
   
    alert("les information sont soumise avec succes");
}
