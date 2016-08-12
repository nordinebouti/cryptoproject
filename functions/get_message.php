<?php

	function get_message(&$mess)
	{
		echo "Veuillez entrer la chaine à chiffrer\n(PS : Elle doit être uniquement composé de lettres et d'espaces.)\n";
		$line = readline(">Message : ");
		$result = explode(" ", $line);
		foreach ($result as $key => $val)
		{
			if (!ctype_alpha($val))
			{
				if ($val == "")
					unset($result[$key]);
				else
				{
					echo "ERREUR : Votre saisie n'est pas une chaine de caractères.\n";
					get_message($mess);
					return(0);
				}
			}
		}
		$mess = $result;
		return (0);
	}