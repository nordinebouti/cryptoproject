<?php

	function generate_enc($mess, &$encrypt, $n)
	{
		$temp = array();
		$cut = "";
		foreach ($mess as $word)
		{
			$i = 0;
			while (isset($word[$i]))
			{	
				array_push($temp, decbin(ord($word[$i])));
				++$i;
			}
		}
		$cut = implode($temp);
		str_split($cut, $n);
	}