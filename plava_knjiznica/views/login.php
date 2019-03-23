<div class="row align-items-center h-100">
	<div class="col-md-6 offset-md-3">
		<form method="POST" action="controllers/login.php">
			<div class="form-group">
				<label for="korisnicko_ime">Korisničko ime</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
						<i class="fas fa-user-secret"></i>
						</span>
					</div>
					<input type="text" name="korisnicko_ime" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="lozinka">Lozinka:</label>
				<input type="password" name="lozinka" class="form-control" />
			</div>
			

			<button class="btn btn-primary" type="submit" name="prijava">
				<i class="fas fa-sign-in-alt"></i>
				Prijavi se
			</button>
		</form>
    </div>
</div>