<?php

function get_e()
	{
		echo "Veuillez entrer le premier entier e.\nPS : (cet entier est supérieur à 1 tout en étant inférieur et premier à 'm'):\n";
		$line = readline(">Premier entier e : ");
		$result = intval($line);
		if ($result <= 1 || !ctype_digit($line))
		{
			echo "ERREUR : Votre saisie n'est pas un nombre supérieur à 1.\n";
			$result = get_e();
		}
		return ($result);
	}
?>