<?php
    
    include("../config/db_config.php");
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];
    $ponovljena_lozinka = $_POST['ponovljena_lozinka'];

    if($lozinka != $ponovljena_lozinka){
        print("Lozinke se ne poklapaju");
    } else {
        $sql = "INSERT INTO korisnik VALUES(null, 
        '".$ime."', 
        '".$prezime."',
        '".$korisnicko_ime."',
        '".$lozinka."', null)";
        mysqli_query ($konekcija, $sql);
        mysqli_close($konekcija);
        print("Uspjesno ste se registrirali");
    }
?>