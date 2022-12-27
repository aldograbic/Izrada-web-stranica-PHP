<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Usluga izrade web stranica">
	<meta name="keywords" content="Ključne riječi o stranici">
	<meta name="author" content="Aldo Grabić">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <title>AG | Izrada web stranica</title>
</head>
<body>
    <?php 
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);

	print '
	<header>
        <nav>';
            include("nav.php");
        print '</nav>
    </header>
	<main>';
		
		if ($_POST['_action_'] == FALSE) {
			$MySQL = mysqli_connect("localhost","root","","izrada_web_stranica_php") or die('Neuspjelo povezivanje na MySQL server.');

			print '
			<h1>Registrirajte se ovdje!</h1>
			<form id="forma" action="" method="POST">
				<input type="hidden" id="_action_" name="_action_" value="TRUE">

				<label for="ime">Ime</label>
				<input type="text" name="ime" required>

				<label for="prezime">Prezime</label>
				<input type="text" name="prezime" required>

				<label for="datum_rodenja">Datum rođenja</label>
				<input type="date" name="datum_rodenja" required>

				<label for="drzava">Drzava</label>
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
				<input type="text" name="korisnicko_ime" required>

				<label for="lozinka">Lozinka</label>
				<input type="password" name="lozinka" required>

				<input type="submit" value="Potvrdi">
			
			</form>';
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
			else {
				echo '<p>Korisnik sa ovim korisničkim imenom ili e-mailom već postoji!</p>';
			}
		}
		print '
		</div>
	</main>
	<footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>

</body>
</html>
'
?>
    

    

    
