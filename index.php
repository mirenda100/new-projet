<?php
try{
// connection a la base des donnees
$conn=new PDO("mysql:host=localhost;dbname=gestionproduit","root","");

}catch(PDOException $e){
    die("echec:" . $e->getMessage());
}
if(isset($_POST['enregistrer'])){
    $libelle=$_POST['libelle'];
    $quantite=$_POST['quantite'];
    $prix=$_POST['prix'];

    

    
        $sql=$conn->prepare("INSERT INTO produit(libelle,quantite,prix) VALUES(?,?,?)");
        $sql->execute(array($libelle,$quantite,$prix));
        
        echo "Insertion reussie ";
        header("location:./liste.php");

        
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de programme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="developpement">
       <h1> <u>formulaire</u></h1>
        <form  method="post" action="modifier.php">
            <div class="groupe">
                <div>
                <label for="id">id</label>
                <input type="text" name="IdUser" id="IdUser">
                    <label for="libelle">libelle</label>
                    <input type="text" name="libelle" id="libelle">
                </div>
                <div>
                    <label for="quantite">quantite</label>
                    <input type="text" name="quantite" id="quantite" >
                </div>
                <div>
                    <label for="prix">prix</label>
                    <input type="text" name="prix" id="prix" >
                </div>
            </div>
          
            <div>
                <div class="valider">
                    
                    <input type="submit" name="enregistrer" value="enregistrer" onclick="valider()">
                    <input type="submit" name="annuler" value="annuler" onclick="valider()">
                    <input type="submit" name="inserer" value="inserer" onclick="valider()">
                    
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>