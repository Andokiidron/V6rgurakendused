<!DOCTYPE html>
<html>
	<head>
		<title>Kodutöö 8 esimene osa</title>
		<meta charset="UTF-8">
            <?php
            $text = "";
            if (isset($_POST['text'])) {
                $text=htmlspecialchars($_POST['text']);
            }
            $taustav2rv = "#ffffff";
            if (isset($_POST['taustatoon']) && $_POST['taustatoon']!="") {
                $taustav2rv=htmlspecialchars($_POST['taustatoon']);
            }
            $tekstiv2rv = "#ffffff";
            if (isset($_POST['tekstitoon']) && $_POST['tekstitoon']!="") {
                $tekstiv2rv=htmlspecialchars($_POST['tekstitoon']);
            }
            $joonelaius = 0;
            if (isset($_POST['joonelaius']) && $_POST['joonelaius']!="") {
                $joonelaius=htmlspecialchars($_POST['joonelaius']);
            }
            $piirjoon = "solid";
            if (isset($_POST['piirjoon']) && $_POST['piirjoon']!="") {
                $piirjoon=htmlspecialchars($_POST['piirjoon']);
            }
            $joonev2rv = "#ffffff";
            if (isset($_POST['joonev2rv']) && $_POST['joonev2rv']!="") {
                $joonev2rv=htmlspecialchars($_POST['joonev2rv']);
            }
            $jooneraadius = 0;
            if (isset($_POST['jooneraadius']) && $_POST['jooneraadius']!="") {
                $jooneraadius=htmlspecialchars($_POST['jooneraadius']);
            }
        ?> 
        <style>
            #tekstiala {
                background: <?php echo $taustav2rv; ?>;
                color: <?php echo $tekstiv2rv; ?>;
                border-width: <?php echo $joonelaius; ?>px;
                border-style: <?php echo $piirjoon; ?>;
                border-color: <?php echo $joonev2rv; ?>;
                border-radius: <?php echo $jooneraadius; ?>px;
            }
        </style>
    
	</head>
	<body>
        <p id = tekstiala>
            <?php echo $text; ?>
        </p>
        <hr/>
        
		<form action="Kodu8.php" method="POST">
            <textarea name="text" cols="100" rows="15" style="width: 50%;" placeholder="Sisesta oma tekst siia"></textarea><br/>
            <hr>
            <input name="tekstitoon" type="color"> Vali teksti värv<br/>
            <input name="taustatoon" type="color"> Vali tausta värv <br/>
            <hr>
            <div>
                  <p>Piirjoon</p>
                      <label><input type="number" name="joonelaius" min="0" max="20" />Piirjoone laius (0-20px)</label><br/>
                      <label><select name="piirjoon">
                        <option value="solid">solid</option>
                        <option value="dotted">dotted</option>
                        <option value="dashed">dashed</option>
                        <option value="double">double</option>
                      </select>Piirjoone stiil</label><br/>

                      <label><input type="color" name="joonev2rv" />Piirjoone värvus</label><br/>
                      <label><input type="number" name="jooneraadius" min="0" max="100" />Piirjoone nurga raadius (0-100px)</label><br/>
            </div>
            <hr>
            <input type="submit" value="esita">
        </form>
    
	</body>
</html>
