<?php
    session_start();

    include("config/db_config.php");
    include("controllers/utils.php");

    $view = "login";

    if (isset($_GET['view'])) {
        $view = $_GET['view'];
    }

    load_view("views/static/header.php", array("title" => "Plava Knjižnica"));        
    load_view("views/$view.php");
    load_view("views/static/footer.php");
?>