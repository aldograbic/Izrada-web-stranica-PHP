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
    <title>AG | To-Do Lista</title>
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
                <a href="img-web-stranice/to_do_lista.png" target="_self"><img src="img-web-stranice/to_do_lista.png" alt="To-Do Lista"></a>
                <figcaption>Naslovna stranica</figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/to_do_lista-2.png" target="_self"><img src="img-web-stranice/to_do_lista-2.png" alt="lista"></a>
                <figcaption>Lista obaveza </figcaption>
            </figure>
            <figure>
                <a href="img-web-stranice/to_do_lista-3.png" target="_self"><img src="img-web-stranice/to_do_lista-3.png" alt="email lista"></a>
                <figcaption>E-mail lista obaveza</figcaption>
            </figure>
        </section>
        <section id="sadrzaj_web_stranica">
            <h1>To-Do Lista</h1>
            <h2>Nema više pamćenja!</h2>
            <p>To-Do Lista rješava sve Vaše probleme.</p>
            <p>Uklanja potrebu pisanja popisa obaveza na papir.</p>
            <p>U unos polje se upiše obaveza i pritisne gumb "Dodaj" ili klikne enter na tipkovnici.</p>
            <p>Nakon unosa prikazuju se sve unesene obaveze.</p>
            <p>Pritiskom na gumb "Pošalji na e-mail" šalje se popis na Vaš e-mail.</p>
            <p><time datetime="2022-10-09">09. listopad 2022.</time></p>
            <a href="gotove-web-stranice.php">Natrag</a>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>