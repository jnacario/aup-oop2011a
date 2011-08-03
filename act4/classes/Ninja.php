<?php

	require_once "classes/Person.php";
	
	class Ninja extends Person{
		public $max_health = 200;
		public $damage = 20;
		public $range;
		public $attack_bonus;
		
		public function attack($enemy){
			$range = rand(1,3);
			if($range == 1)
			{
				$attack_bonus = $this->damage * 0;
			}
			elseif($range == 2)
			{
				$attack_bonus = $this->damage * 1;
			}
			else
			{
				$attack_bonus = $this->damage * 1.2;
			}
				
			$enemy->health -= $attack_bonus;
			echo $this->name." attacks ".$enemy->name." damage: ".$attack_bonus."\n\n";
		}
	}
