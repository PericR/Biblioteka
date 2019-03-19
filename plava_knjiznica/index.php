<?php
    session_start();

    include("config/db_config.php");
    include("controllers/utils.php");

    $view = "login";

    load_view("views/static/header.php", array("title" => "Prijava na sustav"));
    load_view("views/static/navbar.php");
    //load_view("view/$view.php");
    load_view("views/static/footer.php");
?>