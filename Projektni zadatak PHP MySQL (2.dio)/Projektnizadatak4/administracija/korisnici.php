<?php

	if (isset($_POST['edit']) && $_POST['_action_'] == 'TRUE') {
		$query  = "UPDATE korisnici SET ime='" . $_POST['ime'] . "', prezime='" . $_POST['prezime'] . "', email='" . $_POST['email'] . "', korisnicko_ime='" . $_POST['korisnicko_ime'] . "', drzava='" . $_POST['drzava'] . "', uloga='" . $_POST['uloga'] . "' , odobren='" . $_POST['odobren'] . "'";
        $query .= " WHERE id=" . (int)$_POST['edit'];
        $query .= " LIMIT 1";
        $result = @mysqli_query($MySQL, $query);
		@mysqli_close($MySQL);
		
		$_SESSION['message'] = '<p>Uspješno promijenjen korisnički račun!</p>';
		header("Location: index.php?menu=7&action=1");
	}

	if (isset($_GET['delete']) && $_GET['delete'] != '') {
	
		$query  = "DELETE FROM korisnici";
		$query .= " WHERE id=".(int)$_GET['delete'];
		$query .= " LIMIT 1";
		$result = @mysqli_query($MySQL, $query);

		$_SESSION['message'] = '<p>Uspješno obrisan korisnički račun!</p>';

		header("Location: index.php?menu=7&action=1");
	}

	if (isset($_GET['id']) && $_GET['id'] != '') {
		$query  = "SELECT * FROM korisnici";
		$query .= " WHERE id=".$_GET['id'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
		print '
		<div id="forma_uredi">
			<h2>Korisnički račun</h2>
			<p><b>Ime:</b> ' . $row['ime'] . '</p>
			<p><b>Prezime:</b> ' . $row['prezime'] . '</p>
			<p><b>Korisničko ime:</b> ' . $row['korisnicko_ime'] . '</p>';
			$_query  = "SELECT * FROM countries";
			$_query .= " WHERE country_code='" . $row['drzava'] . "'";
			$_result = @mysqli_query($MySQL, $_query);
			$_row = @mysqli_fetch_array($_result);
			print '
			<p><b>Grad:</b> ' .$row['grad'] . '</p>
			<p><b>Ulica:</b> ' .$row['ulica'] . '</p>
			<p><b>Država:</b> ' .$_row['country_name'] . '</p>
			
			<p><a id="admin_link" href="index.php?menu='.$menu.'&amp;action='.$action.'">Natrag</a></p>
		</div>';
	}

	else if (isset($_GET['edit']) && $_GET['edit'] != '') {
		if ($_SESSION['user']['role'] == "administrator") {
		$query  = "SELECT * FROM korisnici";
		$query .= " WHERE id=".$_GET['edit'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
		$checked_archive = false;
		
		print '
		<h2 id="forma_uredi">Uredi korisnički račun</h2>
		<form action="" id="forma_uredi" name="forma" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			<input type="hidden" id="edit" name="edit" value="' . $_GET['edit'] . '">
			
			<label for="ime">Ime</label>
			<input type="text" id="ime" name="ime" value="' . $row['ime'] . '" placeholder="Vaše ime.." required>

			<label for="prezime">Prezime</label>
			<input type="text" id="prezime" name="prezime" value="' . $row['prezime'] . '" placeholder="Vaše prezime.." required>
				
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email"  value="' . $row['email'] . '" placeholder="Vaš e-mail.." required>
			
			<label for="korisnicko_ime">Korisničko ime</label>
			<input type="text" id="korisnicko_ime" name="korisnicko_ime" value="' . $row['korisnicko_ime'] . '" placeholder="Vaše korisničko ime.." required><br>
			
			<label for="drzava">Država</label>
			<select name="drzava" id="drzava">
				<option value="">Molimo odaberite</option>';

				$_query  = "SELECT * FROM countries";
				$_result = @mysqli_query($MySQL, $_query);
				while($_row = @mysqli_fetch_array($_result)) {
					print '<option value="' . $_row['country_code'] . '"';
					if ($row['drzava'] == $_row['country_code']) { print ' selected'; }
					print '>' . $_row['country_name'] . '</option>';
				}
			print '
			</select>

			<label for="grad">Grad</label>
			<input type="text" id="grad" name="grad" value="' . $row['grad'] . '" placeholder="Vaš grad.." required>

			<label for="ulica">Ulica</label>
			<input type="text" id="ulica" name="ulica" value="' . $row['ulica'] . '" placeholder="Vaša ulica.." required>
			
			<label for="uloga">Uloga:</label>
			<br>
            <input type="radio" name="uloga" value="administrator"'; if($row['uloga'] == 'administrator') { echo ' checked="checked"'; $checked_archive = true; } echo ' /> Administrator &nbsp;&nbsp;
			<input type="radio" name="uloga" value="user"'; if($checked_archive == false) { echo ' checked="checked"'; } echo ' /> User
			<input type="radio" name="uloga" value="editor"'; if($checked_archive == false) { echo ' checked="checked"'; } echo ' /> Editor
			
			<label for="odobren">Odobren:</label>
			<br>
            <input type="radio" name="odobren" value="da"'; if($row['odobren'] == 'da') { echo ' checked="checked"'; $checked_archive = true; } echo ' /> DA &nbsp;&nbsp;
			<input type="radio" name="odobren" value="ne"'; if($checked_archive == false) { echo ' checked="checked"'; } echo ' /> NE
			<br>
			<input type="submit" value="Potvrdi">
		</form>
		<p id="forma_uredi"><a id="admin_link" href="index.php?menu='.$menu.'&amp;action='.$action.'">Natrag</a></p>';
		}
		else {
			print '<p>Zabranjen pristup!</p>';
		}
	}
	else {
		if ($_SESSION['user']['role'] == "administrator") {
			print '
			<h2>Lista korisnika</h2>
			<div id="lista_korisnika_stranica">
				<table>
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th>Ime</th>
							<th>Prezime</th>
							<th>E-mail</th>
							<th>Država</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
					$query  = "SELECT * FROM korisnici";
					$result = @mysqli_query($MySQL, $query);
					while($row = @mysqli_fetch_array($result)) {
						print '
						<tr>
							<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;id=' .$row['id']. '"><img src="img/user.png" alt="user"></a></td>
							<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;edit=' .$row['id']. '"><img src="img/edit.png" alt="uredi"></a></td>
							<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;delete=' .$row['id']. '"><img src="img/delete.png" alt="obriši"></a></td>
							<td><strong>' . $row['ime'] . '</strong></td>
							<td><strong>' . $row['prezime'] . '</strong></td>
							<td>' . $row['email'] . '</td>
							<td>';
								$_query  = "SELECT * FROM countries";
								$_query .= " WHERE country_code='" . $row['drzava'] . "'";
								$_result = @mysqli_query($MySQL, $_query);
								$_row = @mysqli_fetch_array($_result, MYSQLI_ASSOC);
								print $_row['country_name'] . '
							</td>
							<td>';
								if ($row['uloga'] == 'administrator') { print '<img src="img/admin.png" alt="" title="" />'; }
								else if ($row['uloga'] == 'user') { print '<img src="img/userman.png" alt="" title="" />'; }
								else if ($row['uloga'] == 'editor') { print '<img src="img/editor.png" alt="" title="" />'; }
							print '
							</td>
						</tr>';
					}
				print '
					</tbody>
				</table>
			</div>';
			
		}
		else {
			print 'Zabranjen pristup!';
		}
	}

	@mysqli_close($MySQL);
?>