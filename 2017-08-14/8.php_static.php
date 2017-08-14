<!--
		php static关键词	
			
			通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
		要完成这一点，在首次声明变量时使用static关键词:	
	
-->

<?php
	
	function myTest(){
		
		static $x = 0;
		
		echo $x;
		echo '<br />';
		
		$x++;
		
	}
	
	myTest();
	
	myTest();
	
	myTest();
	
?>