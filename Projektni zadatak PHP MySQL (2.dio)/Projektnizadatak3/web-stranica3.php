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
    <title>AG | Rezervacija apartmana u Makarskoj</title>
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
                <a href="img-web-stranice/rezervacija_apartmana.png" target="_self"><img src="img-web-stranice/rezervacija_apartmana.png" alt="rezervacija apartmana"></a>
                <figcaption>Naslovna stranica</figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/rezervacija_apartmana-2.png" target="_self"><img src="img-web-stranice/rezervacija_apartmana-2.png" alt="ponuda"></a>
                <figcaption>Ponuda jednodnevnog izleta</figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/rezervacija_apartmana-3.png" target="_self"><img src="img-web-stranice/rezervacija_apartmana-3.png" alt="forma za rezervaciju"></a>
                <figcaption>Forma za rezervaciju</figcaption>
            </figure>
        </section>
        <section id="sadrzaj_web_stranica">
            <h1>Rezervacija apartmana u Makarskoj</h1>
            <h2>Rezerviraj sada!</h2>
            <p>Web stranica osmišljena i izrađena u svrhu pisanja završnog rada.</p>
            <p>Na stranici se nalaze: početna stranica, galerija, ponuda te rezervacija.</p>
            <p>Početna stranica daje nam opis apartmana, specifikacije o smještaju te prikaz adrese na Google Karti.</p>
            <p>Ponuda nam daje prikaz puta do Korčule te opis ponude uključene u cijenu apartmana.</p>
            <p>Rezervaciju radi pomoću forme u kojoj popunjavamo svoje podatke te odabiremo dodatne opcije.</p>
            <p><time datetime="2022-07-09">09. srpanj 2022.</time></p>
            <a href="index.php?menu=3">Natrag</a>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>