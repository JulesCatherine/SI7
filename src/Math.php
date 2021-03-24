<?php
//namespace par defaut 
namespace App;

class Math{
	//fonction qui retourne le double d’un nombre 
	public static function double($nombre){
		return $nombre * 2;
	}

	public static function TTC($HT){
		return $HT*1.2;
	}

	public static function variable($v1, $v2){

		if ($v1===$v2)
			return "C'est le même type";
		else
			return "Ce n'est pas le même type"

	}

	public static function plusPetit($v1, $v2){

		if ($v1>=$v2)
			return "C'est plus petit";
		else
			return "Ce plus grand"

	}
}
?>