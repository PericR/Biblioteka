<?php
    session_start();
?>


<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wraper">
        <div class="container">
            
            <?php
                if(isset($_SESSION['poruka_prijava']) && !empty($_SESSION['poruka_prijava']));
            ?>
            <h1>
                <?php echo $_SESSION['poruka_prijava'];?>
            </h1>
            <?php $_SESSION['poruka_prijava'] == null; ?>
            <?php endif; ?>
            <form class="form" action="login.php" method="POST">
                <input type="text" name="korisnickoIme" placeholder="korisnicko Ime">
                <input type="password" name="lozinka" , placeholder="lozinka">
                <button type="submit" id="login-button">PRIJAVA</button>
            </form>
        </div>
    </div>
</body>

</html>