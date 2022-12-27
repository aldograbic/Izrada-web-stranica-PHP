<?php 

	if (isset($_POST['_action_']) && $_POST['_action_'] == 'add_news') {
		$_SESSION['message'] = '';
		$query  = "INSERT INTO primjeri_web_stranica (naslov, tekst, arhivirano)";
		$query .= " VALUES ('" . htmlspecialchars($_POST['naslov'], ENT_QUOTES) . "', '" . htmlspecialchars($_POST['tekst'], ENT_QUOTES) . "', '" . $_POST['arhivirano'] . "')";
		$result = @mysqli_query($MySQL, $query);
		
		$ID = mysqli_insert_id($MySQL);
		
        if($_FILES['picture']['error'] == UPLOAD_ERR_OK && $_FILES['picture']['name'] != "") {
			$ext = strtolower(strrchr($_FILES['picture']['name'], "."));
            $_picture = $ID . '-' . rand(1,100) . $ext;
			copy($_FILES['picture']['tmp_name'], "img-web-stranice/".$_picture);
			
			if ($ext == '.jpg' || $ext == '.png' || $ext == '.gif') {
				$_query  = "UPDATE primjeri_web_stranica SET slika='" . $_picture . "'";
				$_query .= " WHERE id=" . $ID . " LIMIT 1";
				$_result = @mysqli_query($MySQL, $_query);
				$_SESSION['message'] .= '<p>Uspješno dodana slika!</p>';
			}
        }
		
		$_SESSION['message'] .= '<p>Uspješno dodan primjer web stranice!</p>';
		header("Location: index.php?menu=7&action=2");
	}
	

	if (isset($_POST['_action_']) && $_POST['_action_'] == 'edit_news') {
		$query  = "UPDATE primjeri_web_stranica SET naslov='" . htmlspecialchars($_POST['naslov'], ENT_QUOTES) . "', tekst='" . htmlspecialchars($_POST['tekst'], ENT_QUOTES) . "', arhivirano='" . $_POST['arhivirano'] . "'";
        $query .= " WHERE id=" . (int)$_POST['edit'];
        $query .= " LIMIT 1";
        $result = @mysqli_query($MySQL, $query);
		
        if($_FILES['picture']['error'] == UPLOAD_ERR_OK && $_FILES['picture']['name'] != "") {
			$ext = strtolower(strrchr($_FILES['picture']['name'], "."));
			$_picture = (int)$_POST['edit'] . '-' . rand(1,100) . $ext;
			copy($_FILES['picture']['tmp_name'], "img-web-stranice/".$_picture);
			
			
			if ($ext == '.jpg' || $ext == '.png' || $ext == '.gif') {
				$_query  = "UPDATE primjeri_web_stranica SET slika='" . $_picture . "'";
				$_query .= " WHERE id=" . (int)$_POST['edit'] . " LIMIT 1";
				$_result = @mysqli_query($MySQL, $_query);
				$_SESSION['message'] .= '<p>Uspješno dodana slika!</p>';
			}
        }
		
		$_SESSION['message'] = '<p>Uspješno dodan primjer web stranice!</p>';
		header("Location: index.php?menu=7&action=2");
	}

	if (isset($_GET['delete']) && $_GET['delete'] != '') {
        $query  = "SELECT slika FROM primjeri_web_stranica";
        $query .= " WHERE id=".(int)$_GET['delete']." LIMIT 1";
        $result = @mysqli_query($MySQL, $query);
        $row = @mysqli_fetch_array($result);
        @unlink("img-web-stranice/".$row['picture']); 
		
		$query  = "DELETE FROM primjeri_web_stranica";
		$query .= " WHERE id=".(int)$_GET['delete'];
		$query .= " LIMIT 1";
		$result = @mysqli_query($MySQL, $query);

		$_SESSION['message'] = '<p>Uspješno obrisan primjer web stranice!</p>';
		header("Location: index.php?menu=7&action=2");
	}

	if (isset($_GET['id']) && $_GET['id'] != '') {
		$query  = "SELECT * FROM primjeri_web_stranica";
		$query .= " WHERE id=".$_GET['id'];
		$query .= " ORDER BY datum_unosa DESC";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
		print '
		<h2 id="forma_uredi">Pregled web stranice</h2>
		<div id="forma_uredi">
			<a href="img-web-stranice/' . $row['slika'] . '" target="_blank"><img src="img-web-stranice/' . $row['slika'] . '" alt="' . $row['naslov'] . '" title="' . $row['naslov'] . '"></a>
			<h2>' . $row['naslov'] . '</h2>
			' . $row['tekst'] . '
			<time datetime="' . $row['datum_unosa'] . '">' . pickerDateToMysql($row['datum_unosa']) . '</time>
			<hr>
		</div>
		<p id="forma_uredi"><a id="admin_link" href="index.php?menu='.$menu.'&amp;action='.$action.'">Natrag</a></p>';
	}
	
	else if (isset($_GET['add']) && $_GET['add'] != '') {
		
		print '
		<h2 id="forma_uredi">Nova web stranica</h2>
		<form action="" id="forma_uredi" name="forma" method="POST" enctype="multipart/form-data">
			<input type="hidden" id="_action_" name="_action_" value="add_news">
			
			<label for="naslov">Naslov</label>
			<input type="text" id="naslov" name="naslov" placeholder="Unesite naslov.." required>

			<label for="tekst">Tekst</label>
			<textarea id="tekst" name="tekst" placeholder="Unesite tekst.." required></textarea>
				
			<label for="slika">Slika</label>
			<input type="file" id="slika" name="slika">';

			if ($_SESSION['user']['role'] == "administrator" || $_SESSION['user']['role'] == "editor") {
				print '		
				<label for="arhivirano">Arhivirano:</label><br />
            	<input type="radio" name="arhivirano" value="DA"> DA &nbsp;&nbsp;
				<input type="radio" name="arhivirano" value="NE" checked> NE';
			}
			print '
			<hr>
			
			<input type="submit" value="Potvrdi">
		</form>
		<p id="forma_uredi"><a id="admin_link" href="index.php?menu='.$menu.'&amp;action='.$action.'">Natrag</a></p>';
	}
	
	else if (isset($_GET['edit']) && $_GET['edit'] != '') {
		$query  = "SELECT * FROM primjeri_web_stranica";
		$query .= " WHERE id=".$_GET['edit'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
		$checked_archive = false;

		print '
		<h2 id="forma_uredi">Uredi primjer web stranice</h2>
		<form action="" id="forma_uredi" name="forma" method="POST" enctype="multipart/form-data">
			<input type="hidden" id="_action_" name="_action_" value="edit_news">
			<input type="hidden" id="edit" name="edit" value="' . $row['id'] . '">
			
			<label for="naslov">Naslov *</label>
			<input type="text" id="naslov" name="naslov" value="' . $row['naslov'] . '" placeholder="News title.." required>

			<label for="tekst">Tekst *</label>
			<textarea id="tekst" name="tekst" placeholder="News description.." required>' . $row['tekst'] . '</textarea>
				
			<label for="slika">Slika</label>
			<input type="file" id="slika" name="slika">
						
			<label for="arhivirano">Arhivirano:</label><br />
            <input type="radio" name="arhivirano" value="DA"'; if($row['arhivirano'] == 'DA') { echo ' checked="checked"'; $checked_archive = true; } echo ' /> DA &nbsp;&nbsp;
			<input type="radio" name="arhivirano" value="NE"'; if($checked_archive == false) { echo ' checked="checked"'; } echo ' /> NE

			<input type="submit" value="Potvrdi">
		</form>
		<p id="forma_uredi"><a id="admin_link" href="index.php?menu='.$menu.'&amp;action='.$action.'">Natrag</a></p>';
	}
	else {
		print '
		<h2>Primjeri web stranica</h2>
		<div id="lista_korisnika_stranica">
			<table>
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th>Naslov</th>
						<th>Tekst</th>
						<th>Datum</th>
						<th></th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM primjeri_web_stranica";
				$query .= " ORDER BY datum_unosa DESC";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
					<tr>
						<td><a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;id=' .$row['id']. '"><img src="img/website.png" alt="user"></a></td>
						<td>';
							if ($_SESSION['user']['role'] == "administrator" || $_SESSION['user']['role'] == "editor") {
								print '<a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;edit=' .$row['id']. '"><img src="img/edit.png" alt="uredi"></a></td>';
							}
						print '
						<td>';
							if ($_SESSION['user']['role'] == "administrator") {
								print '<a href="index.php?menu='.$menu.'&amp;action='.$action.'&amp;delete=' .$row['id']. '"><img src="img/delete.png" alt="obriši"></a></td>';
							}
						print '
						<td>' . $row['naslov'] . '</td>
						<td>';
						if(strlen($row['tekst']) > 60) {
                            echo substr(strip_tags($row['tekst']), 0, 60).'...';
                        } else {
                            echo strip_tags($row['tekst']);
                        }
						print '
						</td>
						<td>' . pickerDateToMysql($row['datum_unosa']) . '</td>
						<td>';
							if ($row['arhivirano'] == 'DA') { print '<img src="img/inactive.png" alt="" title="" />'; }
                            else if ($row['arhivirano'] == 'NE') { print '<img src="img/active.png" alt="" title="" />'; }
						print '
						</td>
					</tr>';
				}
			print '
				</tbody>
			</table>
			<a href="index.php?menu=' . $menu . '&amp;action=' . $action . '&amp;add=true" id="admin_link">Dodaj primjer web stranice</a>
		</div>';
	}

	@mysqli_close($MySQL);
?>