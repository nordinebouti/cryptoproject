<?php

	foreach (glob("functions/*.php") as $filefunc)
		include_once $filefunc;
		
	$e = 0;
	$m = 0;
	$n = 0;
	$count = 0;
	$s = array();
	$sp = array();
	$perm = array();
	$mess = array();
	$bin = array();
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
			generate_sp($e, $m, $s, $sp, $perm);
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
			echo "3\n";
		}
	}
	echo "Merci d'avoir utilisé le Crypto Project !\n";