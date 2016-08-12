<?php

	function generate_dec(&$dec, $encrypt, $d, $m)
	{
		foreach ($encrypt as $value)
		{
			array_push($dec, my_modulo($value * $d, $m));
		}
		return(0);
	}