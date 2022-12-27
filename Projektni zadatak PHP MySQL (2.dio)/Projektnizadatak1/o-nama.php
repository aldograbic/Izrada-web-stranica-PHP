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
    <title>AG | O nama</title>
</head>
<body>
    <header>
        <nav>
            <?php
            include("nav.php");
            ?>
        </nav>
    </header>

    <main class="o_nama_main">
        <section id="odj_3">
            <h1>O nama</h1>
            <p>Mi smo web development tvrtka s najboljim timom koji je uvijek u koraku s najnovijim trendovima u web development-u, web design-u, SEO-u i marketingu. </p>
            <p>Naš tim će vam osigurati najbolji i jedinstven dizajn za vaše potrebe i pomoći vam da sagradite svoj online posao i ispromovirate ga do maksimuma!</p>
            <p>Vaše najbolje ideje pretvoriti ćemo u stvarnost.</p>
            <section id="linkovi">
                <p>Zapratite nas na drušvenim mrežama:</p>
                    <a href="https://www.instagram.com" target="_blank"><img src="img/instagram_ikona.png" alt="Instagram ikona" title="Instagram ikona" ></a>
                    <a href="https://www.facebook.com" target="_blank"><img src="img/facebook_ikona.png" alt="Facebook ikona" title="Facebook ikona"></a>
                    <a href="https://twitter.com" target="_blank"><img src="img/twitter_ikona.png" alt="Twitter ikona" title="Twitter ikona"></a>
            </section>
        </section>
        <section id="odj_4">
            <video width="640px" height="480px" poster="video/thumbnail.jpg" muted controls>
                <source src="video/HTML in 100 Seconds.mp4" type="video/mp4">
                Fireship - HTML in 100 seconds
            </video>
            
        </section>
        
    </main>

    <footer id="o_nama_footer">
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>