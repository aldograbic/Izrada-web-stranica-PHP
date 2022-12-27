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
    <title>AG | Kontakt</title>
</head>
<body>
    <header>
        <nav>
            <?php
            include("nav.php");
            ?>
        </nav>
    </header>

    <main>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2786.2077153766472!2d16.054799115759124!3d45.706869625238646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667e40171ea2dd%3A0x1bddce9eac57766a!2sUl.%20Nikole%20Tesle%2C%2010410%2C%20Velika%20Gorica!5e0!3m2!1shr!2shr!4v1667027144594!5m2!1shr!2shr" width="800px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <form action="" method="post">
			<fieldset id="forma">
				<legend>Pišite nam!</legend>
				<div>
					<label for="moje_ime">Ime</label>
					<input type="text" name="Ime" id="moje_ime" placeholder="Upišite svoje ime" required autofocus>
				</div>
				<div>
					<label for="moje_prezime">Prezime</label>
					<input type="text" name="Prezime" id="moje_prezime" placeholder="Upišite svoje prezime" required>
				</div>
				<div>
					<label for="moj_email">E-mail</label>
					<input type="email" name="E-mail" id="moj_email" placeholder="Upišite svoj e-mail" required>
				</div>
				<div>
                    <label>Država</label>
                    <select>
                        <option value="">Odaberite jedno</option>
                        <option value="Croatia">Hrvatska</option>
                        <option value="Bosnia and Herzegovina">Bosna i Hercegovina</option>
                        <option value="Serbia">Srbija</option>
                        <option value="Slovenia">Slovenija</option>
                        <option value="Macedonia">Makedonija</option>
                        <option value="Bulgaria">Bugarska</option>
                        <option value="Montenegro">Crna Gora</option>
                    </select>
                </div>
                <div>
                    <label for="textarea">Opis web stranice</label>
                    <textarea id="textarea" placeholder="Pišite nam ovdje .." required></textarea>
                </div>
                <button type="submit">Pošalji</button>
            </fieldset>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>

</body>
</html>