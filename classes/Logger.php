<?php

/**
 *  Clase para crear un log
 */
class Logger{
	
	public static function log($text){
		$prefix = date('d-m-Y- h:i:s ::: ');
		file_put_contents('log.txt', $prefix . $text . "\n", FILE_APPEND);
	}
}