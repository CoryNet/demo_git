<?php
	class Securite
	{
		// Donn�es entrantes
		public static function bdd($string)
		{
			// On regarde si le type de string est un nombre entier (int)
			if(ctype_digit($string))
			{
				$string = intval($string);
			}
			// Pour tous les autres types
			else
			{

			}
				
			return $string;

		}
		// Donn�es sortantes
		public static function html($string)
		{
			return htmlentities($string);
		}
	}
?>
