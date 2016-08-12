<?php
	
	function get_sp(&$sp)
	{
		echo "Veuillez entrer la clè S' sous le format x,y,z. (Ex : 1,2,5)\n";
		$line = readline(">Clé publique S' : ");
		if (check_supc($line) == 0)
		{
			echo "La suite n'est pas au bon format !\n";
			return (get_sp($sp));
		}
		$result = explode(",", $line);
		for ($i = 0; isset($result[$i]); $i++)
		{
			if (!ctype_digit($result[$i]))
				$result = get_sp($sp);
		}
		$sp = $result;
		return (0);
	}