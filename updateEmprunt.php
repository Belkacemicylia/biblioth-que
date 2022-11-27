<?php
require_once "fonctions.php";

if ($_POST['confirmerL']) {

    $idlivre = $_POST['id_emprunt'];
    updateEtatL($idlivre);
    header('Location:admin.php');

}

if ($_POST['confirmerD']) {

    $id = $_POST['id_emprunt'];
    updateEtatD($iddisque);
    header('Location:admin.php');

}


?>