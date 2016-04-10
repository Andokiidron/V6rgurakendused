<?php
	$file = 'count.txt';
    
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $adress = $_SERVER["REMOTE_ADDR];
    
    $connection = mysqli_connect($host, $user, $pass, "test");
    
    $sql = INSERT INTO `test`.`kiidron_reintam_9042016` (`IP`) VALUES ("$adress");
    mysqli_close($connection);

	$current = file_get_contents($file); //see current ei oma tähtsust kas number või tekst
	$current++;
	file_put_contents($file, $current);
   

?>