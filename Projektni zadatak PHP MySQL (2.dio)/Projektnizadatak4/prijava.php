<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	
	print '
	<main>
	<h1 class="login_naslov">Prijava</h1>
		<div class="forma_reg_prij">';

		if ($_POST['_action_'] == FALSE) {
			
			print '
			<form id="forma" action="" method="POST">
				<input type="hidden" id="_action_" name="_action_" value="TRUE">

				<label for="korisnicko_ime">Korisničko ime</label>
				<input type="text" name="korisnicko_ime" value="" required autofocus>
										
				<label for="lozinka">Lozinka</label>
				<input type="password" name="lozinka" value="" required>
										
				<input type="submit" class="login_reg" value="Potvrdi">
			</form>';
		}
		else if ($_POST['_action_'] == TRUE) {

			$MySQL = mysqli_connect("localhost","root","","izrada_web_stranica_php") or die('Neuspjelo povezivanje na MySQL server.');
			$query  = "SELECT * FROM korisnici WHERE korisnicko_ime = '" .  $_POST['korisnicko_ime'] . "'";
			$result = @mysqli_query($MySQL, $query);
			$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
			
				if (password_verify($_POST['lozinka'], $row['lozinka'])) {
					if($row['odobren'] == 'da') {

					$_SESSION['user']['valid'] = 'true';
					$_SESSION['user']['id'] = $row['id'];

					$_SESSION['user']['authorized'] = $row['odobren'];
					$_SESSION['user']['role'] = $row['uloga'];
					$_SESSION['user']['firstname'] = $row['ime'];
					$_SESSION['user']['lastname'] = $row['prezime'];
					$_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '!</p>';
					header("location: index.php?menu=7");
					}
					else {
						$_SESSION['message'] = 'Administrator Vas mora odobriti da se možete prijaviti!';
						header("location: index.php?menu=6");
					}	
				}
				else {
					$_SESSION['message'] = '<p>Pogrešno korisničko ime ili lozinka!</p>';
					header("location: index.php?menu=6");
				}
		}

		print '
		</div>
		</main>
'?>