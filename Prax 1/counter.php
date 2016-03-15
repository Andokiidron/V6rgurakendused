<?php
	$file = ‘count.txt';

	// Open the file to get existing content
	$current = file_get_contents($file); //see current ei oma tähtsust kas number või tekst
	$current++;
	// Write the contents back to the file
	file_put_contents($file, $current);
?>