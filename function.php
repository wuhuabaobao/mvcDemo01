<?php
	
	function C($name,$method){
		
		require_once('/libs/Controller/'.$name.'Controller.class.php');
			


		eval('$obj =new '.$name.'Controller();$obj->'.$method.'();');
		
		}
		
	
		
//	大M函数不需要带$method参数，因为Model模型的函数通常都都着自己的参数
//  为什么控制器的大C函数 要带$method参数，因为原则上是不允许控制器的方法有自己的参数的，那样是不符合MVC架构规范的。
	
	function M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		eval('$obj =new '.$name.'Model();');
		return $obj;
	}
	
	function V($name){
		require_once('/libs/View/'.$name.'View.class.php');
		eval('$obj =new '.$name.'View();');
		return $obj;
	}
	
	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}

?>