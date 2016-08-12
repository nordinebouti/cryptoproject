<?php
	
	function generate_s2(&$s2, $s, $perm)
	{
		foreach ($s as $key => $value)
		{
			$s2[$perm[$key]] = $value;
		}
		return (0);
	}