<?php
namespace core\lib;
use core\lib\conf;

class log
{
	static $class;
	static public function init(){
		$drive=conf::get('DRIVE','log');
		$class='\core\lib\driver\log\\'.$drive;

		self::$class=new $class;
	}
	static function log($name,$file='log'){
		self::$class->log($name,$file);
	}
}