<?php
print '
<ul>
	<li><a href="index.php?menu=1">Početna stranica</a></li>
	<li><a href="index.php?menu=2">O nama</a></li>
	<li><a href="index.php?menu=3">Primjeri web stranica</a></li>
	<li><a href="index.php?menu=4">Kontakt</a></li>';
	
if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
	print '
	<li><a id="reg_prij" href="index.php?menu=5">Registracija</a></li>
	<li><a id="reg_prij" href="index.php?menu=6">Prijava</a></li>';
}
else if ($_SESSION['user']['valid'] == 'true') {
	print '
	<li><a href="index.php?menu=7">Admin</a></li>
	<li><a href="odjava.php">Odjava</a></li>';
}
print '
</ul>';
?>