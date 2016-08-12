<?php

	function get_s()
	{
		$temp = 0;
		echo "Veuillez entrer la clè secrète S sous le format x,y,z. (Ex : 1,2,5)\n";
		$line = readline(">Clé super croissante S : ");
		if (check_supc($line) == 0)
		{
			echo "La suite n'est pas au bon format !\n";
			return (get_s());
		}
		$result = explode(",", $line);
		for ($i = 0; isset($result[$i]); $i++)
		{
			$val = intval($result[$i]);
			if ($val <= $temp || !ctype_digit($result[$i]))
				$result = get_s();
			$temp += $val;
		}
		return ($result);
	}
	