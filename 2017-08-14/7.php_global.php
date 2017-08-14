<!--
	php global关键词
	
		global关键词用于访问函数内的全局变量。
		
		要做到这一点，请在（函数内部）变量前面使用global关键词：
		
-->

//<?php
//	
//	$x = 5;
//	
//	$y =10;
//	
//	 function myText2(){
//	  		
//	 	global $x,$y;
//	  	
//		$y = $x + $y;
//	  	
//	 }
//	  
//	 myText2();
//	 
//	 echo $y; 
//		  
//?>


<?php
	
	$x=5;
	
	$y=10;
	
	function myTest() {
		
	  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	  
	} 
	
	myTest();
	
	echo $y;
?>