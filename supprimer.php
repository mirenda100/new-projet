<?php

$conn=new PDO("mysql:host=localhost;dbname=gestionproduit","root","");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    var_dump($id);
    
     $sql=$conn->prepare("DELETE FROM produit WHERE id=?");
     $sql->execute(array($id));
     echo "suppresion reussie";
    

     header("location:./liste.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
</body>
</html>