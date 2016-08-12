<?php

	function init(&$e, &$m, &$s)
	{
		affichage();
		$e = get_e();
		$m = get_m($e);
		$s = get_s();
	}