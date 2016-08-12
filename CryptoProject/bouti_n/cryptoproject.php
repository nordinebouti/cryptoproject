<?php

	foreach (glob("src/*.php") as $filefunc)
		include_once $filefunc;
		
	$e = 0;
	$m = 0;
	$n = 0;
	$d = 0;
	$count = 0;
	$s = array();
	$sp = array();
	$s2 = array();
	$perm = array();
	$mess = array();
	$bin = array();
	$dec = array();
	$decrypt = "";
	$encrypt = "";
	$entry = "";
	
	
	affichage();
	echo "Bienvenue sur le Crypto Project.\n";
	while ($entry != "exit")
	{
		echo "Faites votre choix :\n";
		echo "1 - Génération de clé publique.\n";
		echo "2 - Chiffrement d'un message.\n";
		echo "3 - Déchiffrement d'un message\n";
		echo "exit - Sortir du programme\n";
		$entry = readline(">Votre choix : ");
		if ($entry == "1")
		{
			$sp = array();
			init($e, $m, $s);
			echo "Génération de la clé publique";
			generate_sp($e, $m, $s, $sp, $perm);
			echo "\nClé publique générée !\n";
			echo "La clé publique est : ";
			echo implode(',',$sp)."\n";
		}
		else if ($entry == "2")
		{
			get_sp($sp);
			get_message($mess);
			$count = count($sp);
			get_n($n, $count);
			generate_bin($mess, $bin, $n);
			generate_enc($bin, $encrypt, $sp, $n);
			echo "Votre message crypté est :";
			echo "$encrypt.\n";
		}
		else if ($entry == "3")
		{
			get_encrypt($encrypt);
			init($e, $m, $s);
			generate_sp($e, $m, $s, $sp, $perm);
			$d = inv_modulo($e, $m);
			$count = count($sp);
			get_n($n, $count);
			generate_dec($dec, $encrypt, $d, $m);
			generate_s2($s2, $s, $perm);
			generate_decrypt($s2, $n, $decrypt, $dec);
		}
	}
	echo "Merci d'avoir utilisé le Crypto Project !\n";