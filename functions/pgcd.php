<?php
	
	function pgcd($a, $b)
	{
		while ($a != $b)
		{
		    if( $a > $b )
			$a = $a - $b;
		    else if( $a < $b )
			$b = $b - $a;
		}
		return $a;
	}