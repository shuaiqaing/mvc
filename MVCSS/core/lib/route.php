<?php
namespace core\lib;
use core\lib\conf;
class route
{
	public $strl;
	public $action;
	function __construct(){
		// p('自动加载成功');
		/**
		 * 隐藏index.php
		 */
		// p($_SERVER['REQUEST_URI']);
		if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']!='/'){
			$path=$_SERVER['REQUEST_URI'];
			$patharr=explode('/',trim($path,'/'));
			// p($patharr);
			if(isset($patharr[0])){
				$this->strl=$patharr[0];
			}
			unset($patharr[0]);
			if(isset($patharr[1])){
				$this->action=$patharr[1];
			}else{
				$this->action=conf::get('ACTION','route');
			}
			unset($patharr[1]);
			for ($i=2; $i <count($patharr)+1; $i++) { 
				if(isset($patharr[$i+1])){
					$arr[$patharr[$i]]=$patharr[$i+1];
				}
				$i++;
				
			}
			// p($arr);
		}else{
			$this->strl=conf::get('CTRL','route');
			$this->action=conf::get('ACTION','route');
		}
	}
}