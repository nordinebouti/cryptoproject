<?php

	function generate_decrypt($s2, $n, &$decrypt, $encrypt)
	{
		$i = 0;
		$j = $n;
		$tab = array();
		$result = array();
		$temp = "";
		$bin = "";
		
		while ($i < $n)
		{
			$temp .= "0";
			$i++;
		}
		foreach ($encrypt as $key => $val)
		{
			$i = 0;
			$temp2 = $temp;
			$j = $n;
			while ($val > 0)
				{
					if ($val > $s2[$j])
					{
						$val = $val - $s2[$j];
						$temp2[$i] == '1';
					}
					++$i;
					--$j;
				}
			array_push($temp2, $tab);
		}
		
		$bin = implode('', $tab);
		return(0);
	}