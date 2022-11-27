<?php
require_once "fonctions.php";

if ($_POST['confirmerL']) {

    $idlivre = $_POST['id_emprunt'];
    updateEtatL($idlivre);
    header('Location:admin.php');

}
if ($_POST)
    print_r($_POST);
if ($_POST['confirmerD']) {

    $iddisque = $_POST['id_emprunt_1'];
    $test = updateEtatD($iddisque);
    header('Location:admin.php');

}


?>