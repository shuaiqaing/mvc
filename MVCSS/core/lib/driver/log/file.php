<?php
namespace core\lib\driver\log;
use core\lib\conf;
class file{
	public $path;
	function __construct(){
		$conf=conf::get('OPTION','log');
		$this->path=$conf['PATH'];
	}
	// p($this->path);
	public function log($message,$file='log'){
		$time=date('Y-m-d');
		if(!is_dir($this->path.$time)){
			mkdir($this->path.$time,'0777',true);
		}
		// p($this->path.$time.'/'.$file.'.php');die;
		return file_put_contents($this->path.$time.'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
	}	
}