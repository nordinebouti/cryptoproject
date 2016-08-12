<?php

	function generate_decrypt($s, $count, &$decrypt, $dec)
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
		foreach ($dec as $val)
		{
			$i = 0;
			$temp2 = $temp;
			$j = $n - 1;
			while ($val > 0)
			{
				if (($val - $s2[$j]) >= 0)
				{
					$val = $val - $s[$j];
					$temp2[$i] == '1';
				}
				++$i;
				echo $val."\n";
				if($j == 0)
					exit();
				--$j;
			}
			array_push($temp2, $tab);
		}
		var_dump($tab);
		$bin = implode('', $tab);
		return(0);
	}