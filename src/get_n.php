<?php

	function get_n(&$n, $count)
	{
		echo "Veuillez entrer l'entier n.\nPS : (cet entier devra être supérieur à 2 et inférieur au nombre total de terme de S': $count):\n";
		$line = readline(">Entier n : ");
		$result = intval($line);
		if (!ctype_digit($line))
		{
			echo "ERREUR : Veuillez entrer un nombre.\n";
			get_n($n, $count);
			return(0);
		}
		else if ($result < 2 || $result > $count)
		{
			echo "ERREUR : Veuillez entrer un nombre supérieur à 2 et inférieur à $count.\n";
			get_n($n, $count);
			return(0);
		}
		$n = $result;
		return (0);
	}