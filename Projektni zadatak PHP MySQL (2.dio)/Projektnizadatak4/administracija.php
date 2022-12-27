<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		
		<div id="admin_nav">
			<ul>
				<li><a href="index.php?menu=7&amp;action=1">Korisnici</a></li>
				<li><a href="index.php?menu=7&amp;action=2">Web stranice</a></li>
			</ul>
			<h1 id="admin_nav">Administracija</h1>';

			if ($action == 1) { include("administracija/korisnici.php"); }
			else if ($action == 2) { include("administracija/web-stranica.php"); }
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Registrirajte se i prijavite pomoću korisničkog imena i lozinke!</p>';
		header("Location: index.php?menu=6");
	}
?>