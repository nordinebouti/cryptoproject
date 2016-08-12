<?php

	foreach (glob("functions/*.php") as $filefunc)
		include_once $filefunc;
		
	$e = 0;
	$m = 0;
	$n = 0;
	$s = array();
	$sp = array();
	$perm = array();
	$mess = array();
	$encrypt = array();
	
	init($e, $m, $s);
	generate_sp($e, $m, $s, $sp, $perm);
	get_message($mess);
	get_n($n);
	generate_enc($mess, $encrypt, $n);
	//var_dump($encrypt);