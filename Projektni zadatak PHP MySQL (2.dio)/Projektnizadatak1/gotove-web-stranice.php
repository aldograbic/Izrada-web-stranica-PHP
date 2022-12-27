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
    <title>AG | Primjeri web stranica</title>
</head>
<body>
    <header>
        <nav>
            <?php
            include("nav.php");
            ?>
        </nav>
    </header>

    <main class="primjeri_web_stranica_main">
        <h1>Primjeri izrađenih web stranica</h1>
        <section>
            <a href="web-stranica1.php"><img src="img/bmwm4.png" alt="bmw m4"></a>
            <h2>BMW M4</h2>
            <p>Web stranica za automobil BMW M4. Izrada stranice za Web Aplikacije.<a href="web-stranica1.php">Više...</a></p>
            <p><time datetime="2021-01-06">06. siječanj 2021.</time></p>
        </section>
        
        <section>
            <a href="web-stranica2.php"><img src="img/portfolio.png" alt=""></a>
            <h2>Portfolio - Aldo Grabić</h2>
            <p>Portfolio sa kontaktom i izrađenim projektima za Aldo Grabić.<a href="web-stranica2.php">Više...</a></p>
            <p><time datetime="2022-10-14">14. listopad 2022.</time></p>
        </section>
        
        <section>
            <a href="web-stranica3.php"><img src="img/rezervacija_apartmana.png" alt=""></a>
            <h2>Rezervacija apartmana u Makarskoj</h2>
            <p>Web stranica za rezerviranje apartmana u gradu Makarska. Izrada stranice u svrhu završnog rada.<a href="web-stranica3.php">Više...</a></p>
            <p><time datetime="2022-07-09">09. srpanj 2022.</time></p>
        </section>
        
        <section>
            <a href="web-stranica4.php"><img src="img/to_do_lista.png" alt=""></a>
            <h2>To-Do Lista</h2>
            <p>Web stranica za izradu popisa obaveza.<a href="web-stranica4.php">Više...</a></p>
            <p><time datetime="2022-10-09">09. listopad 2022.</time></p>
        </section>
        
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>