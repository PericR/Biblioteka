<?php
    session_start();
    require 'controller/config.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try
        {
            $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

            $stmt = $dbh->prepare('SELECT * FROM korisnici WHERE korisnickoIme = :korisnickoIme AND lozinka = :lozinka');
            $stmt->execute([
                ':korisnickoIme' => $_POST['korisnickoIme'],
                ':lozinka' => $_POST['lozinka']
            ]);

            $korisnik = $stmt->fetch();

            if(empty($korisnik))
            {
                $_SESSION['poruka_prijava'] = 'Neispravno korisnicko ime ili lozinka.';
                header('Location: home.php')
                exit();
            }
            else
            {
                $_SESSION['IDkorisnik'] = $korisnik['IDkorisnik'];
                $_SESSION['korisnickoIme'] = $korisnik['korisnickoIme'];
                $_SESSION['lozinka'] = $korisnik['lozinka'];

                $_SESSION['poruka_prijava'] = 'Uspjesno ste prijavljeni.';

                header('Location: home.php');
                exit();
            }
        }
        catch(PDOException $e)
        {
            http_response_code(500);
            die($e->getMessage());
        }
    }
?>