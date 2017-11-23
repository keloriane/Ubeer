<?php

    if (isset($_GET["nom"])&&isset($_GET["mail"])&&isset($_GET["prenom"])) {
    
         
      $bdd = new PDO('mysql:host=localhost;dbname=ubeer;charset=utf8','root','');
      $envoi = $bdd->prepare('INSERT INTO subscriber(nom,prenom,mail,cocher)VALUES (:nom, :prenom , :mail, 0)');
      $envoi->execute(array(
        'nom' => $_GET["nom"],
        'prenom' => $_GET["prenom"],
        'mail' => $_GET["mail"]  
      
      ));
    }
?>
