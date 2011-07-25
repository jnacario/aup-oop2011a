<?php

	class Factory
	{
		public static function getUser()
		{
			$user = new user();
			return $user
		}
	}
	
	$user = Factory::getUser();
