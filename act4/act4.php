<?php

	require_once "classes/Person.php";
	require_once "classes/Warrior.php";
	require_once "classes/Ninja.php";
	
	$me = new Person("John");
	$naruto = new Warrior("Naruro");
	$sasuke = new Ninja("Sasuke");
	
	echo $me->getName();
	//echo $me->_name;
	
	while($naruto->is_alive() and $sasuke->is_alive()){
		$sasuke.attack($naruto)
		if($naruto->is_alive($naruto))
			$naruto.attack($sasuke)
		}

	if(naruto.is_alive() and not sasuke.is_alive())
		echo naruto.name + " wins!";
	else
		echo sasuke.name + " wins!";
