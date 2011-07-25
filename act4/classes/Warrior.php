<?php

	require_once "classes/Person.php";
	
	class Warrior extends Person{
		public $max_health = 200;
		public $damage = 10;
		public $range;
		
		public function attack(){
			$range = rand(1,3);
			if($range==1)
				
		}
	}
