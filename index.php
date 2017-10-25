<?php
	
	require_once('function.php');
	
	//为了安全性，给定一个允许的控制器名和方法名的数组
	$controllerAllow=array('test','index');
	$methodAllow=array('test','index','show');
	
// 安全性：	daddslashes是让传递的参数经过第一次过滤
//	$controller=daddslashes($_GET['controller']);
//	$method=daddslashes($_GET['method']);

//安全性：in_array是一个函数，用来判断字符串是否存在于数组内
	$controller=in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';
	
	$method=in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):'index';
	
	C($controller,$method);
	
	

?>