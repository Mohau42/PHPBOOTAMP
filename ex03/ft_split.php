#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$old = explode(" ",$str);
		$new = array();
		sort($old);
		foreach($old as $key)
		{
			if (empty($key) == 0)
				$new[] = $key;
		}
		unset($old);
		return($new);
	}
?>

