<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eksam IP aadresside lugemine</title>
</head>
<body>
    <h1>Tere, tänan et külastasid lehte</h1>
    <p>Sinu IP salvestatakse</p>
    <?php
        function connect_db(){
        global $conn;
        $host="localhost";
        $user="test";
        $pass="t3st3r123";
        $db="test";
        $conn = mysql_connect($host, $user, $pass, $db);
        if(!$conn)
            die("cannot connect to mysql server" . mysql_error());
        mysql_select_db($db, $conn);
        $sql = "INSERT INTO 000IPsave (IP) VALUES(" . $_SERVER['REMOTE_ADDR'] . ")";
        if(!mysql_query($sql,$conn))
            die("ERROR: " .mysql_error());
        mysql_close($conn);
        }
    ?>
</body>
</html>
