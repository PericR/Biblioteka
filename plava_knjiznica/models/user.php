<?php
function get_user_login ($korisnicko_ime, $lozinka, $konekcija) {
    $sql = "SELECT * FROM korisnik 
    WHERE korisnicko_ime='".$korisnicko_ime."' 
    AND lozinka='".$lozinka."'";
    
    $result = mysqli_query($konekcija, $sql);
    return mysqli_fetch_assoc($result);
}

function print_profile_dropdown($ime, $prezime){
    return '<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Profil
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">'.$ime.'</a>
        <a class="dropdown-item" href="#">'.$prezime.'</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="?view=dodaj_karticu">Dodaj karticu</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.php?odjava=odjava">Odjava</a>
    </div>
</li>';
}
?>