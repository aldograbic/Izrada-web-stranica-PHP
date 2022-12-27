<!DOCTYPE html>
<html lang="en">
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
    <title>AG | BMW M4</title>
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
        <section id="galerija_web_stranica">
            <figure>
                <a href="img-web-stranice/bmwm4.png" target="_self"><img src="img-web-stranice/bmwm4.png" alt="bmw m4"></a> 
                <figcaption>Naslovna stranica</figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/bmwm4-2.png" target="_self"><img src="img-web-stranice/bmwm4-2.png" alt="bmw m4 vijesti"></a>
                <figcaption>Vijesti vezane uz M4</figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/bmwm4-3.png" target="_self"><img src="img-web-stranice/bmwm4-3.png" alt="bmw m4 galerija"></a>
                <figcaption>Galerija slika</figcaption>
            </figure>
        </section>
        <section id="sadrzaj_web_stranica">
            <h1>BMW M4</h1>
            <h2>Auto bez greške!</h2>
            <p>Web stranica osmišljena i izrađena u svrhu predmeta Web aplikacije.</p>
            <p>Na stranici se nalaze: početna stranica, novosti, o nama, kontakt te galerija slika.</p>
            <p>Opisuju se specifikacije novog  i starijeg modela BMW M4 te najnoviji članci o njima.</p>
            <p>Galerija slika pokazuje svaku varijantu M4 - od slika s utrka do cestovnih.</p>
            <p>Kontakt forma je također uključena kojom se šalje upit BMW-u te prikaz najbliže poslovnice na Google Karti.</p>
            <p><time datetime="2021-01-06">06. siječanj 2021.</time></p>
            <a href="gotove-web-stranice.php">Natrag</a>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>