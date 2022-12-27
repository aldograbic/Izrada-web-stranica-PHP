<?php

session_start();
$MySQL = mysqli_connect("localhost","root","","izrada_web_stranica_php") or die('Neuspjelo povezivanje na MySQL server.');

if(isset($_GET['menu'])) { $menu = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action = (int)$_GET['action']; }
	
if(!isset($_POST['_action_'])) { $_POST['_action_'] = FALSE; }
    if (!isset($menu)) { $menu = 1; }

print '
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
    <header>
    <div'; if ($menu > 1) {} else { print ' class="banner"'; }  print '></div>
        <nav>';
            include("nav.php");
        print '</nav>
    </header>';

		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	if (!isset($menu) || $menu == 1) { include("pocetna.php"); }
	else if ($menu == 2) { include("o-nama.php"); }
	else if ($menu == 3) { include("gotove-web-stranice.php"); }
	else if ($menu == 4) { include("kontakt.php"); }
	else if ($menu == 5) { include("registracija.php"); }
	
	print '
    </main>

    <footer>
        <p>Copyright &copy; 2023 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>';
?>