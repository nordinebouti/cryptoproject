<?php

	function generate_decrypt($s2, $count, &$decrypt, $dec, $n)
	{
		$i = 0;
		$j = $n;
		$tab = array();
		$result = array();
		$temp2 = "";
		$temp = "";
		$bin = "";
		$save = 0;
		
		while ($i < $n)
		{
			$temp .= "0";
			$i++;
		}
		foreach ($dec as $key => $val)
		{
			$i = 0;
			$temp2 = $temp;
			$j = $count - 1;
			while ($val > 0)
			{
				foreach ($s2 as $key2 => $val2)
				{
					if (($val - $val2) >= 0 && $save < $val2)
					{
						$save_val = $val2;
						$save_key = $key2;
					}
				}
				$val = $val - $save_val;
				$temp2[$save_key] == '1';
			}
			array_push($tab, $temp2);
		}
		var_dump($tab);
		exit();
		$bin = implode('', $tab);
		return(0);
	}