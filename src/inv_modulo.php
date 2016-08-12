<?php

	function inv_modulo($a, $n)
	{
	    if (is_int($a) && $a != 0 && is_int($n) && $n != 0)
	    {
		  $inv;
		  
		  for ($inv = 1; $inv < $n; $inv++)
		  {
			if (my_modulo(($a * $inv), $n) == 1)
			    return ($inv);
		  }
		  return (-1);
	    }
	    else
		  return (-1);
	}