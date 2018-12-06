<?php
//Chargement du controlleur
require('controller/controller.php');

try {
    if (isset($_GET['page'])) {
   


    } else {
       
        accueil();
    }
} catch (Exception $e) {
    echo 'Erreur' . $e->getMessage();
}
?>