<?php

	function generate_decrypt($s2, $n, &$decrypt, $encrypt)
	{
		$i = 0;
		$j = $n;
		$temp = "";
		$tab = array();
		while ($i < $n)
			$temp .= "0";
		$i = 0;
		foreach ($encrypt as $key => $val)
		{
			$temp2 = $temp;
			while ($val > 0)
				{
					if ($val > $s2[$j]);
						$val = $val - $s2[$n];
					$temp2[$i] == '1';
				}
			array_push($temp2, $tab);
		}
		
		$encrypt = implode(' ', $tab);
		return(0);
	}