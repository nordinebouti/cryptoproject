<?php

	function generate_sp($e, $m, $s, &$sp, &$perm)
	{
		foreach ($s as $value)
			array_push($sp, my_modulo($value * $e, $m));
		asort($sp);
		foreach($sp as $key => $value)
			array_push($perm, $key);
		sort($sp);
		return (0);
	}