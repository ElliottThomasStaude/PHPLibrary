<?php

class _ {

	public static function echoPlusPlus($string="", &$object=false) {
		echo "\n>>>" . $string;
		if ($object !== false) {
			echo ":\n" . var_dump($object);
		}
		echo "\n"; 
	}
	
}