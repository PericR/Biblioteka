<?php
//Spajanje na bazu
$konekcija = mysqli_connect("localhost", "root", "", "baza_web_knjiznice");
mysqli_set_charset($konekcija, "utf8");
?>