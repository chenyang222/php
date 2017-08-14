<!--
	
		php变量作用域
			
			在php中，可以在脚本的任意位置对变量进行声明。
			
			php有三种不同的变量作用域：
			
				local（局部）
				global（全局）
				static(静态)
-->

<!--
		local和global作用域
		
			函数之外声明的变量拥有global作用域，只能在函数以外进行访问。
			
			函数内部声明的变量拥有local作用域，只能在函数内部进行访问。		
	
-->
<?php
		
		$x = 5;
		
		function myTest(){
			
			$y = 10;
			
			echo "<p>测试函数内部的变量：</p>";
			
			echo "变量 x 是：$x";
			
			echo "<br />";
			
			echo "变量 y 是 $y";
				
		}
		
		myTest();

			echo "<p>测试函数之外的变量：</p>";
			
			echo "变量 x 是：$x";
			
			echo "<br />";
			
			echo "变量 y 是 $y";		
?>



