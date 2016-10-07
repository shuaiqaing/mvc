<?php
namespace app\model;
use core\lib\model;
/**
* 
*/
class liumodel extends model
{
	public $table='user';
	function lists(){
		$re=$this->select($this->table,"*");
		return $re;
	}
	function add($arr){
		// p($arr);die;
		return $this->insert($this->table,$arr);
	}
}
?>