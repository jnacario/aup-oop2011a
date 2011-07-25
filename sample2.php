<?php

	class Factory
	{
		public static function get($object)
		{
			//return instance, creating it if it doesn't exist
			static $objects;
			if(is_null($objects))
				$objects = array();
			if(!isset($objects[$object]))
			{
				$objects[$object] = new $object();
			}
			return $objects[$object];
		}
	}

	class Person
	{
		$name = "John";
	}

	$new = Factory::get("Person");
	echo $new;
