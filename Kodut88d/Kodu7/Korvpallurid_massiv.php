<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TÜ ROCK 2016</title>
</head>
<body>
<h1>TÜ ROCK 2016 tutvustus</h1>
<?php
$korvpallurid = array(
    array('nimi' => 'Tanel Sokk', 's2rginumber' => '4', 'positsioon' => '1', 'synniaasta' => '1985'),
    array('nimi' => 'Evaldas Zabas', 's2rginumber' => '24', 'positsioon' => '1', 'synniaasta' => '1988'),
    array('nimi' => 'Kristen Meister', 's2rginumber' => '13', 'positsioon' => '2', 'synniaasta' => '1993'),
    array('nimi' => 'Gert Dorbek', 's2rginumber' => '6', 'positsioon' => '2', 'synniaasta' => '1985'),
    array('nimi' => 'Tanel Kurbas', 's2rginumber' => '22', 'positsioon' => '3', 'synniaasta' => '1988'),
    array('nimi' => 'Saimon Sutt', 's2rginumber' => '10', 'positsioon' => '3', 'synniaasta' => '1995'),
    array('nimi' => 'Marek Doronin', 's2rginumber' => '11', 'positsioon' => '3', 'synniaasta' => '1983'),
    array('nimi' => 'Kent-Kaarel Vene', 's2rginumber' => '5', 'positsioon' => '3', 'synniaasta' => '1994'),
    array('nimi' => 'Janar Talts', 's2rginumber' => '8', 'positsioon' => '4', 'synniaasta' => '1983'),
    array('nimi' => 'Timo Eichfuss', 's2rginumber' => '9', 'positsioon' => '4', 'synniaasta' => '1988'),
    array('nimi' => 'Brian Harper', 's2rginumber' => '21', 'positsioon' => '4', 'synniaasta' => '1985'),
    array('nimi' => 'Reinar Hallik', 's2rginumber' => '51', 'positsioon' => '4', 'synniaasta' => '1984'),
    array('nimi' => 'Karolis Petrukonis', 's2rginumber' => '15', 'positsioon' => '5', 'synniaasta' => '1987'),

);
foreach ($korvpallurid as $m2ngija) {
    include 'korvpallurid_rock.html';
}
?>

</body>
</html>