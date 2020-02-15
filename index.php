<?php require('inc_connexion.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title> projet moteur de recherche</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="utf-8">
</head>

<body>
    <header></header>
    <h1>Moteur de recherche</h1>
    </header>
    <?php

   

   if(isset($_GET['recherche'])){
       $recherche = $_GET['recherche'];
       
   }
    
      

 
    //requete
    $result = $mysqli->query('SELECT ville_id, ville_nom, ville_texte FROM villes WHERE ville_nom LIKE "%' . $recherche . '%"');
    //creation du nouvel array
    while ($row = $result->fetch_array()) {
        // variables destinées à l'affichage
        $nom = $row['ville_nom'];
        $texte = $row['ville_texte'];
        $villes[$row['ville_id']]= $row['ville_nom'];
    }
    
    ?>
    
    
    <div> 
        
        <form method="GET">
            <p>
                <label> Entrer votre ville</label> : <input type="text" name="recherche" />
               
               <input type="submit" name="submit_name" value="ok">
            </p>
           
            <p><a href="description.php?recherche=<?= $nom ?>"><?= $nom?> </a></p>  
            </form>
    </div>
   
</body>
</html>