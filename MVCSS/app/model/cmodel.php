<?php
namespace app\model;
use core\lib\model;
/**
* 
*/
class cmodel extends model
{
	public $table='user';
	function lists(){
		$re=$this->select($this->table,"*");
		return $re;
	}
}
?>