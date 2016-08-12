<?php

function get_m($e)
	{
		echo "Veuillez entrer le second entier m :\n";
		$line = readline(">Second entier m : ");
		$result = intval($line);
		if ($result <= 0 || !ctype_digit($line) || $result <= $e )
		{
			echo "L'entier n'est pas au bon format.\n";
			$result = get_m($e);
		}
		else if (pgcd($e, $result) != 1)
		{
			echo "Le premier entier e et le second entier m ne sont pas premiers entre eux.\n";
			echo "";
			$result = get_m($e);
		}
		return ($result);
	}