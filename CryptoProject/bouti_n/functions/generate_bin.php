<?php

	function generate_bin($mess, &$bin, $n)
	{
		$temp = array();
		$result = array();
		$cut = "";
		$push = "";
		foreach ($mess as $word)
		{
			$i = 0;
			while (isset($word[$i]))
			{
				$push = sprintf("%08d", decbin(ord($word[$i])));
				array_push($temp, $push);	
				++$i;
			}
		}
		$cut = implode($temp);
		complete_str($cut, $n);
		$bin = str_split($cut, $n);
		return (0);
	}