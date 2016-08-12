<?php

	function check_supc($str)
	{
		$reg = "/^[0-9,]*$/";
		$result = preg_match($reg, $str);
		return ($result);
	}