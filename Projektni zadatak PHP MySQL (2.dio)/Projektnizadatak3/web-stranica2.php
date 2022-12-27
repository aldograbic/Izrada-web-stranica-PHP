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
    <title>AG | Portfolio - Aldo Grabić</title>
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
                <a href="img-web-stranice/portfolio.png" target="_self"><img src="img-web-stranice/portfolio.png" alt="portfolio"></a>
                <figcaption>Naslovna stranica</figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/portfolio-2.png" target="_self"><img src="img-web-stranice/portfolio-2.png" alt=""></a>
                <figcaption></figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/portfolio-3.png" target="_self"><img src="img-web-stranice/portfolio-3.png" alt=""></a>
                <figcaption></figcaption>
            </figure>
        </section>
        <section id="sadrzaj_web_stranica">
            <h1>Portfolio - Aldo Grabić</h1>
            <h2>Sve na jednom mjestu!</h2>
            <p>Web stranica osmišljena i izrađena u svrhu prikaza CV-a i dosadašnjih projekata na jednom mjestu.</p>
            <p>Na stranici se nalaze: početna stranica, o sebi, vještine, popis projekata te kontakt forma.</p>
            <p>Web stranica je rađena u jednom dokumentu te ima mnogo funkcija, primjerice dark mode. </p>
            <p>U "About" dijelu opisano je o meni, u "Skills" moje vještine, a u "Portfoliu" se nalaze projekti i CV.</p>
            <p>Mogućnost laganog kontaktiranja uz kontakt formu ili e-mail.</p>
            <p><time datetime="2022-10-14">14. listopad 2022.</time></p>
            <a href="index.php?menu=3">Natrag</a>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>