<?php
$tekst = "Siin on tekst mis on tagurpidi kirjutatud.";
function tagurpidi($tekst) {
    $tekstimasiiv = str_split($tekst);
    $koht = count($tekstimasiiv) - 1;
    for ($i = $koht; $i > -1; $i--) {
        echo "$tekstimasiiv[$i]";
    }
}
tagurpidi($tekst);
?>