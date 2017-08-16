<!--
	php常量
	
		常量类似变量，但是常量一旦被定义旧无法更改或撤销定义。
		
		常量是单个值的标识符（名称）。在脚本中无法改变该值。
		
		有效的常量名以字符或下划线开头（常量名称前面没有$符号）。
		
		注：与变量不同，常量贯穿整个脚本是自动全局的。
-->
<!--
	
	设置pbp常量
		
		如需设置常量，请使用define()函数 － 它使用三个参数：
		
			1.首个参数定义常量的名称
			2.第二个参数定义常量的值
			3.可选的第三个参数规定常量名是否对大小写不敏感。默认是false.
-->

<?php
	
	define('GREETING',"welcome to ranchy's php study");
	
	echo GREETING;
?>
<!--
		下面创建了一个对大小写不敏感的常量	
-->
<?php
	
	echo "<br />";
	
	define('GREETING2',"welcome to ranchy's php study again");
	
	echo GREETING2;	

?>