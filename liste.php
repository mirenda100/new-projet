<?php
 $conn=new PDO("mysql:host=localhost;dbname=gestionproduit","root","");
 
 $sql=$conn->prepare("SELECT * FROM produit"); 
  $sql->execute();
 $data = $sql->fetchall();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="modifier.js"></script>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>id</th>
                <th>libelle</th>
                <th>quantite</th>
                <th>prix</th>

            </tr>

        </thead>
    <tbody>
    <?php foreach($data as $row): ?>     
            <tr>
               <td><?= $row['id']?></td> 
                <td><?= $row['libelle']?></td>
                <td><?= $row['quantite']?></td>
                <td><?= $row['prix']?></td>
                <td>
                     <button name="modifier"
                     data-identifiant="<?= $row['id']?>"
                     data-libelle="<?= $row['libelle']?>"
                     data-quantite="<?= $row['quantite']?>"
                     data-prix="<?= $row['prix']?>"

                      onclick="openFormulaire(this)">modifier</button>

                    <button name="supprimer" 
                     data-elment="<?= $row['id']?>"
                     onclick="deleteUser(event)">
                        supprimer </button>
                </td>
          <tr>
        <?php endforeach ?>
        
           


    </tbody>
    </table>
  
    
     <?php  require_once('index.php');  
     require_once('supprimer.php'); 
     ?>
     
     
</body>
</html>