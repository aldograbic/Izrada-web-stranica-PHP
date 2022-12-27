<?php 
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);

		
		if ($_POST['_action_'] == FALSE) {
			$MySQL = mysqli_connect("localhost","root","","izrada_web_stranica_php") or die('Neuspjelo povezivanje na MySQL server.');

			print '
			<main>
			<h1 class="login_naslov">Registrirajte se ovdje!</h1>
			<div class="forma_reg_prij">
			
			<form id="forma" action="" method="POST">
				<input type="hidden" id="_action_" name="_action_" value="TRUE">

				<label for="ime">Ime</label>
				<input type="text" name="ime" required>

				<label for="prezime">Prezime</label>
				<input type="text" name="prezime" required>

				<label for="datum_rodenja">Datum rođenja</label>
				<input type="date" name="datum_rodenja" required>

				<label for="drzava">Država</label>
				<select name="drzava" id="drzava">
					<option value="">Odaberite</option>';

					$query = "SELECT * FROM countries";
					$result = @mysqli_query($MySQL, $query);
					while($row = @mysqli_fetch_array($result)) {
						print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
					}

				print '
				</select>
				<label for="grad">Grad</label>
				<input type="text" name="grad" required>

				<label for="ulica">Ulica</label>
				<input type="text" name="ulica" required>

				<label for="email">E-mail</label>
				<input type="email" name="email" required>

				<label for="korisnicko_ime">Korisničko ime</label>
				<input type="text" name="korisnicko_ime">

				<label for="lozinka">Lozinka</label>
				<input type="password" name="lozinka">

				<input class="login_reg" type="submit" value="Potvrdi">
			
			</form>
			</div>';
		}
		else if ($_POST['_action_'] == TRUE) {
			
			$MySQL = mysqli_connect("localhost","root","","izrada_web_stranica_php") or die('Neuspjelo povezivanje na MySQL server.');
			
			$query  = "SELECT * FROM korisnici";
			$query .= " WHERE email='" .  $_POST['email'] . "'";
			$query .= " OR korisnicko_ime='" .  $_POST['korisnicko_ime'] . "'";
			$result = @mysqli_query($MySQL, $query);
			$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
			
			if ($row['email'] == '' || $row['korisnicko_ime'] == '') {
				$pass_hash = password_hash($_POST['lozinka'], PASSWORD_DEFAULT, ['cost' => 12]);
				
				$query  = "INSERT INTO korisnici (ime, prezime, datum_rodenja, drzava, grad, ulica, email, korisnicko_ime, lozinka)";
				$query .= " VALUES ('" . $_POST['ime'] . "', '" . $_POST['prezime'] . "', '" . $_POST['datum_rodenja'] . "', '" . $_POST['drzava'] . "', '" . $_POST['grad'] . "', '" . $_POST['ulica'] . "', '" . $_POST['email'] . "', '" . $_POST['korisnicko_ime'] . "', '" . $pass_hash . "')";
				$result = @mysqli_query($MySQL, $query);

				echo '<p>' . ucfirst(strtolower($_POST['ime'])) . ' ' .  ucfirst(strtolower($_POST['prezime'])) . ', hvala na registraciji! Sada se možete prijaviti u sustav!</p>
				<hr>';
			}

			elseif (empty($_POST['korisnicko_ime']) && empty($_POST['lozinka'])) {
				$generatedUsername = strtolower(substr($_POST['ime'],0,1)) . '' . strtolower($_POST['prezime']);
				$bytes = openssl_random_pseudo_bytes(4);
				$pass = bin2hex($bytes);

				$query = "INSERT INTO korisnici(korisnicko_ime, lozinka)";
				$query .= "VALUES ('" . $generatedUsername . ", ". $pass ."')";
				$result = @mysqli_query($MySQL, $query);
			}


			else {
				echo '<p>Korisnik sa ovim korisničkim imenom ili e-mailom već postoji!</p>';
			}
		}
		print '
		</main>';
?>
    

    

    
