<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="controllers/register.php">
                <div class="form-group">
                    <h4>Molimo unesite svoje podatke</h4>
                </div>
                <div class="form-group">
                    <label for="ime">Vaše Ime</label>
                    <input type="text" class="form-control" name="ime" placeholder="Unesite Vaše Ime">
                </div>
                <div class="form-group">
                    <label for="prezime">Vaše Prezime</label>
                    <input type="text" class="form-control" name="prezime" placeholder="Unesite Vaše Prezime">
                </div>
                <div class="form-group">
                    <label for="korisnicko_ime">Vaše Korisničko Ime</label>
                    <input type="text" class="form-control" name="korisnicko_ime" placeholder="Korisničko Ime">
                </div>
                <div class="form-group">
                    <label for="lozinka">Lozinka</label>
                    <input type="password" class="form-control" name="lozinka" placeholder="Unesite Vašu Lozinku">
                </div>
                <div class="form-group">
                    <label for="ponovljena_lozinka">Ponovite Lozinku</label>
                    <input type="password" class="form-control" name="ponovljena_lozinka" placeholder="Ponovite Vašu Lozinku">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit" name="registracija">
                        Registrirajte se
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>