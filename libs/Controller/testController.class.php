<?php
	class testController{
		function show(){
			//控制器->2、按照指令选取一个合适的模型
			$testModel=M('test');
			
			//模型->3、按照控制器的指令取出数据
			$data=$testModel->get();
			
			//控制器->4、按照指令取出相对的视图		
			$testView=V('test');
			
			//视图->5、把第三步取到的数据按照客户的要求的样子显示出来
			$testView->display($data);
			
			
		}
	}
?>