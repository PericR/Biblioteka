<?php
    
    include("../config/db_config.php");
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];
    $ponovljena_lozinka = $_POST['ponovljena_lozinka'];
    $uloga_korisnika = "korisnik";
    
    $provjeri_korisnicko_ime = "SELECT * FROM korisnik 
    WHERE korisnicko_ime = '".$korisnicko_ime."'
    LIMIT 1";
    $provjeri_korisnicko_ime_rezultat = mysqli_query($konekcija, $provjeri_korisnicko_ime);

    if($lozinka != $ponovljena_lozinka){
        print("Lozinke se ne poklapaju.");
    } else if(mysqli_num_rows($provjeri_korisnicko_ime_rezultat) != 0){                
        print("Zauzeto korisnicko ime.");
    }else {
        $sql = "INSERT INTO korisnik VALUES(null, 
        '".$ime."', 
        '".$prezime."',
        '".$korisnicko_ime."',
        '".$lozinka."', '".$uloga_korisnika."')";
        mysqli_query ($konekcija, $sql);
        mysqli_close($konekcija);
        header("Location:../index.php");
        print("Uspjesno ste se registrirali");
    }
?>