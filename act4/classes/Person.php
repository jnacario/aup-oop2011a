<?php

	class Person{
		public $_name;
		public $health = 100;
		public $max_health = 100;
		
		public function is_alive($health,$_name){
			if(health>0)
				return true;
			return false;
		}
		
		public function __construct($name){
			$this->_name=$name;
		}
		
		public function getName(){
			return $this->_name;
		}
	}
