<?php


$conn=new PDO("mysql:host=localhost;dbname=gestionproduit","root","");

if(isset($_POST['enregistrer'])){
  
    /* echo'ok'; die(); */
    $Id=$_POST['IdUser'];
    $libel=$_POST['libelle'];
    $qte=$_POST['quantite'];
    $prix=$_POST['prix'];
   /*  echo$Id.' '.$libelle.$quantite.$prix; die(); */ 
 $sql=$conn->prepare("UPDATE produit SET libelle=?,quantite=?,prix=? WHERE id=?");
 $sql->execute(array($libel, $qte, $prix,$Id));
 $data = $sql->fetchall();
 echo "les données ont été modifié avec succes";

}
if(isset($_POST['inserer'])){
    $libelle=$_POST['libelle'];
    $quantite=$_POST['quantite'];
    $prix=$_POST['prix'];
    
    $sql=$conn->prepare("INSERT INTO produit(libelle,quantite,prix) VALUES(?,?,?)");
    $sql->execute(array($libelle,$quantite,$prix));
    echo "Insertion reussie ";
}
if(isset($_POST['supprimer'])){
    $id=$_POST['id'];

    $sql=$conn->prepare("DELETE FROM produit WHERE id=?");
     $sql->execute(array($id));
}


?>