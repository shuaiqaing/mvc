<?php
namespace app\ctrl;
use core\lib\model;
/**
* 
*/
class indexctrl extends \core\mvc
{
	public function index(){
		// // $model=new model();
		// // $re=new \app\model\cmodel();
		// // $model=$re->lists();
		// // p($model);
		// // $db=new \core\lib\model();
		// // $sql="select * from user";
		// // $arr=$db->query($sql);
		// // p($arr->fetchAll());
		$data='你好 世界！';
		// // $title='首页面哦';
		$this->assion("data",$data);
		// // $this->assion("title",$title);
		$this->display('index.html');
	}

	public function lists(){
		$model=new \app\model\liumodel();
		$re=$model->lists();
		$this->assion("list",$re);
		$this->display('lists.html');
	}

	function add(){
		$this->display('add.html');
	}

	function add_1(){
		$arr=$_POST;
		$model=new \app\model\liumodel();
		$re=$model->add($arr);
		if($re){
			echo 'ok';
		}else{
			echo 'no';
		}
	}
}