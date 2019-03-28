<?php
    session_start();

    include("config/db_config.php");
    include("controllers/utils.php");
    
    $view = "prodaja";

    if (isset($_GET['view'])) {
        $view = $_GET['view'];
    }

    if(isset($_GET['odjava'])){
        session_destroy();
        header('Location: index.php');
    }

    if(!isset($_SESSION['uloga_korisnika'])){
        $_SESSION['uloga_korisnika'] = "gost";
    }

    

    load_view("views/static/header.php", array("title" => "Plava Knjižnica"));        
    load_view("views/static/navbar.php");
    load_view("views/$view.php");
    load_view("views/static/footer.php");
?>