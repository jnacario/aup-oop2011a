<?php

	class Singleton
	{
		public static function instantiate()
		{
			static $instance;
			if(is_null($instance))
				$instance = new Singleton();
			return $instance;
		}
	}
