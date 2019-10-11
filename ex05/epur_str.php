
#!/usr/bin/php

<?php
	function epur_str($str)
	{
		$str = trim($str);
		$str = preg_replace('/ +', ' ', $str);
		return($str);
	}
	if (count($argv) == 2)
		echo epur_str($argv[i]). "\n";
	else 
		return ;
	
?>
