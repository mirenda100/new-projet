function openFormulaire(button){
   /* recupere les attribut data au bouton modifier */
   const ident = button.getAttribute("data-identifiant");
   const libelle = button.getAttribute("data-libelle");
   const quantite = button.getAttribute("data-quantite");
   const prix = button.getAttribute("data-prix");
  


   /* chager dans le formulaire */
   document.getElementById("IdUser").value=ident;
   document.getElementById("libelle").value=libelle;
   document.getElementById("quantite").value=quantite;
   document.getElementById("prix").value=prix;
   
}
function deleteUser($event){
    const id = $event.target.attributes[1].value;
    if (confirm("etes-vous sur de vouloir supprimer cet élément? "+id)){
    
    //    const idt = button.getAttribute("data-elment");
    // document.getElementById("id").value=idt;
    window.location.href='supprimer.php?id='+id;

     
    }
    else{
        alert("echec");
        
    }


}