#!/usr/bin/php
<?php

	$array = array_slice($argv, 1);
	$words = [];
	foreach ($array as $key)
			 foreach(explode(' ', trim(preg_replace('/ +/', ' ', $key))) as $ky)
				 $words [] = $ky;
	sort($words);
	foreach($words as $word)
	echo "$word\n";
?>

