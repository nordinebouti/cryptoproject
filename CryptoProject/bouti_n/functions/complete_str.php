<?php

	function complete_str(&$str, $n)
	{
		$len = strlen($str);
		
		while (my_modulo($len, $n) != 0)
		{
			$str[$len] = '0';
			$len++;
		}
		return(0);
	}