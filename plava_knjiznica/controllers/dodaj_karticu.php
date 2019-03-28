<?php
    session_start();
    include('../config/db_config.php');

    $id_korisnika = $_SESSION['id'];
    $broj_kartice = $_POST['broj_kartice'];
    $tip_kartice = $_POST['tip_kartice'];
    $expire_date = $_POST['expire_date'];
    $cvv = $_POST['cvv'];
    
    $sql = "INSERT INTO bankovna_kartica VALUES(
        '".$id_korisnika."',
        '".$broj_kartice."',
        '".$tip_kartice."',
        '".$expire_date."',
        '".$cvv."'
    )";
    
    mysqli_query($konekcija, $sql);
    mysqli_close($konekcija);
    header("Location:../index.php?view=prodaja");
?>