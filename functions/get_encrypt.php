<?php

	function get_encrypt(&$encrypt)
	{
		echo "Veuillez entrer la chaine chiffrée\n(PS : Elle doit être uniquement composé de chiffres et d'espaces.)\n";
		$line = readline(">Message : ");
		$result = explode(" ", $line);
		foreach ($result as $key => $val)
		{
			if (!ctype_digit($val))
			{
				if ($val == "")
					unset($result[$key]);
				else
				{
					echo "ERREUR : Votre saisie n'est pas une chaine de nombres.\n";
					get_encrypt($encrypt);
					return(0);
				}
			}
		}
		$encrypt = $result;
		return (0);
	}