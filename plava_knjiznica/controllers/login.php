<?php
    session_start();
    error_reporting(E_ALL | E_STRICT);
    ini_set("display_errors", 'On');

    include("../config/db_config.php");

    unset($_SESSION['nepoklapajuce_lozinke']);
    unset($_SESSION['zauzeto_korisnicko_ime']);

    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];

    $sql = "SELECT * FROM korisnik
    WHERE korisnicko_ime='".$korisnicko_ime."'
    AND lozinka='".$lozinka."'
    LIMIT 1";

    $rezultat = mysqli_query($konekcija, $sql);

    if(mysqli_num_rows($rezultat) == 0){
        $_SESSION['nepostojeci_korisnik']='<small class="text-danger">Pogrešno korisničko ime ili lozinka!!</small>';
        header("Location:../index.php?view=login");
    } else {
        unset($_SESSION['nepostojeci_korisnik']);

        $_SESSION['korisnicko_ime'] = $korisnicko_ime;
        $_SESSION['lozinka'] = $lozinka;
        $user = mysqli_fetch_assoc($rezultat);
        $_SESSION['uloga_korisnika'] = $user['uloga_korisnika'];
        $_SESSION['ime'] = $user['ime'];
        header("Location:../index.php?view=prodaja");
    }

    mysqli_close($konekcija);
?>