<?php
function P($var){
	if(is_bool($var)){
		var_dump($var);
	}else if(is_null($var)){
		var_dump(NULL);
	}else{
		echo "<pre>";
		print_r($var);
	}
}
function C($name,$method){
	require_once('controller/'.$name.'Controller.class.php');
	eval("$obj=new ".$name."Controller(); $obj->".$method."();");
}
function M($name){
	require_once('model/'.$name.'Model.class.php');
	eval("$obj=new ".$name."Model();");
	return $obj;
}
function V($name){
	require_once('view/'.$name.'View.class.php');
	eval("$obj=new ".$name."View();");
	return $obj;
}