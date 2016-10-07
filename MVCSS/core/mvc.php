<?php
namespace core;

/**
* 
*/
class mvc
{
	public static $calssMap=array();
	public $assign;
	static function run(){
		\core\lib\log::init();
		\core\lib\log::log($_SERVER);
		$route=new \core\lib\route();
		$ctrlClass=$route->strl;
		$action=$route->action;
		//先死后活 默认为index控制器index方法
		// $ctrlfile=APP.'/ctrl/'.$ctrlClass."Ctrl.php";
		$ctrlfile=APP.'/ctrl/'.$ctrlClass."ctrl.php";
		// p($ctrlfile);die;
		$ctrlClass="\\".MODULE."\ctrl\\".$ctrlClass.'ctrl';
		// p($ctrlClass);
		if(is_file($ctrlfile)){
			include($ctrlfile);
			$ctrl=new $ctrlClass;
			//这里为写死的index方法
			// $ctrl->index();
			$ctrl->$action();
			\core\lib\log::log('ctrl:'.$ctrlClass.'action:'.$action);
		}else{
			throw new Exception("找不到服务器",$ctrlClass);
		}
	}
	static function load($class){
		//自动加载类
		$class=str_replace('\\','/',$class);
		
		if(isset($calssMap[$class])){
			return true;
		}else{
			$file=PATHNOW.'/'.$class.'.php';
			if(is_file($file)){
				include $file;
				self::$calssMap[$class]=$class;
			}else{
				return false;
			}
		}
		
	}
	function assion($data,$value){
		$this->assign[$data]=$value;
	}
	function display($file){
		$in=$file;
		$file=APP."/views/".$file;
		if(is_file($file)){
			// extract($this->assign);
			// include($file);
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP."/views");
			$twig = new \Twig_Environment($loader, array(
			    'cache' => PATHNOW."/log/twig",
			    'debug'=>DEBUG
			));
			// $assin=$this->assign?$this->assign:array();
			$template = $twig->loadTemplate("$in");
			$template->display($this->assign?$this->assign:array());
		}

	}
}