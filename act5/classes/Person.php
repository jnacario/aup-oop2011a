<?php

	require_once "interfaces/Human.php";

	abstract class Person implements Human{
		public $name;
		public $health = 100;
		public $max_health = 100;
		
		public function getName(){
			return $this->name;
		}
		
		public function is_alive(){
			if($this->health > 0)
			{
				return true;
			}
			return false;
		}
	}
