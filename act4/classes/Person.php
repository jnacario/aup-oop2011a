<?php

	class Person{
		public $name;
		public $health = 100;
		public $max_health = 100;
		
		public function __construct($name){
			$this->name=$name;
		}
		
		public function is_alive(){
			if($this->health > 0)
			{
				return true;
			}
			return false;
		}
		
		public function getName(){
			return $this->name;
		}
	}
