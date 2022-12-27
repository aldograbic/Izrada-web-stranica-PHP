<?php
print '
<main class="primjeri_web_stranica_main">';
	
if (isset($action) && $action != '') {
    $query  = "SELECT * FROM primjeri_web_stranica INNER JOIN slike ON primjeri_web_stranica.vise_slika = slike.id";
    $query .= " WHERE primjeri_web_stranica.id=" . $_GET['action'];
    $result = @mysqli_query($MySQL, $query);
    $row = @mysqli_fetch_array($result);
        print '
        <div id="galerija_web_stranica">
            <a href="img-web-stranice/' . $row['slika1'] . '" target="_blank"><img src="img-web-stranice/' . $row['slika1'] . '" alt="' . $row['naslov'] . '" title="' . $row['naslov'] . '"></a>
            <a href="img-web-stranice/' . $row['slika2'] . '" target="_blank"><img src="img-web-stranice/' . $row['slika2'] . '" alt="' . $row['naslov'] . '" title="' . $row['naslov'] . '"></a>
            <a href="img-web-stranice/' . $row['slika3'] . '" target="_blank"><img src="img-web-stranice/' . $row['slika3'] . '" alt="' . $row['naslov'] . '" title="' . $row['naslov'] . '"></a>
            
            <h2>' . $row['naslov'] . '</h2>
            <p>'  . $row['tekst'] . '</p>
            <time datetime="' . $row['datum_unosa'] . '">' . pickerDateToMysql($row['datum_unosa']) . '</time>
            <a href="index.php?menu=3">Natrag</a>
        </div>';
}
else {
    print '<h1>Primjeri web stranica</h1>';
    $query  = "SELECT * FROM primjeri_web_stranica";
    $query .= " WHERE arhivirano ='NE'";
    $query .= " ORDER BY datum_unosa DESC";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {
        print '
        <div class="primjeri_web_stranica_main">
            <img src="img-web-stranice/' . $row['slika'] . '" alt="' . $row['naslov'] . '" title="' . $row['naslov'] . '">
            <h2>' . $row['naslov'] . '</h2>';
            if(strlen($row['tekst']) > 90) {
                echo substr(strip_tags($row['tekst']), 0, 90).'... <a href="index.php?menu=' . $menu . '&amp;action=' . $row['id'] . '">Više</a>';
            } else {
                echo strip_tags($row['tekst']);
            }
            print '
            <time datetime="' . $row['datum_unosa'] . '">' . pickerDateToMysql($row['datum_unosa']) . '</time>
            <hr>
        </div>';
    }
}
print '
</main>
'?>