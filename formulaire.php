 <?php
    require_once("modifier.php");
    //  $conn=new PDO("mysql:host=localhost;dbname=gestionproduit","root","");
    // header("location:./liste.php");
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

     <div class="developpement">
         <h1> <u>formulaire</u></h1>
         <form method="post" action="">
             <div class="groupe">
                 <div>
                     <label for="libelle">libelle</label>
                     <input type="text" name="libelle" id="libelle">
                 </div>
                 <div>
                     <label for="quantite">quantite</label>
                     <input type="text" name="quantite" id="quantite">
                 </div>
                 <div>
                     <label for="prix">prix</label>
                     <input type="text" name="prix" id="prix">
                 </div>
                 <button name="enregistrer">enregistrer </button>
             </div>
         </form>
     </div>
 </body>

 </html>