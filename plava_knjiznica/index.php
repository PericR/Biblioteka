<?php
    session_start();

    include("controller/db_config.php");
    include("utils.php");

    $view = "login";

    load_view("view/static/header.php", array("title" => "Prijava na sustav"));
    load_view("view/static/navbar.html");
    //load_view("view/$view.php");
    load_view("view/static/footer.php");
?>