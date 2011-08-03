<?php

	require_once "classes/Person.php";
	require_once "classes/Warrior.php";
	require_once "classes/Ninja.php";

	$naruto = new Warrior("Naruro");
	$sasuke = new Ninja("Sasuke");

	while($naruto->is_alive() and $sasuke->is_alive())
	{
		$sasuke->attack($naruto);
		if($naruto->is_alive())
		{
			$naruto->attack($sasuke);
		}
	}

	if($naruto->is_alive() && !$sasuke->is_alive())
	{
		echo $naruto->name." wins!\n";
	}
	else
	{
		echo $sasuke->name." wins!\n";
	}
