<?php

	function generate_sp($e, $m, $s, &$sp, &$perm)
	{
		echo "Génération de la clé publique";
		foreach ($s as $value)
		{
			array_push($sp, my_modulo($value * $e, $m));
			usleep(250000);
			echo ".";
		}
		asort($sp);
		foreach($sp as $key => $value)
			array_push($perm, $key);
		echo "\nClé publique générée !\n";
		return (0);
	}