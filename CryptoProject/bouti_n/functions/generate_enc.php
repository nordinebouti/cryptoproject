<?php

	function generate_enc($bin, &$encrypt, $sp, $n)
	{
		$i = 0;
		$total = 0;
		$result = array();
		
		foreach($bin as $key => $val)
		{
			for($i = 0; $i < $n; $i++)
			{
				if ($val[$i] == '1')
					$total += $sp[$n - $i - 1];
			}
			array_push($result, $total);
			$total = 0;
		}
		$encrypt = implode(' ', $result);
		return(0);
	}