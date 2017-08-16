<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		
		<!--
			
			php数据类型
			
				字符串 整数 浮点数 逻辑 数组 对象 NULL
			
		-->
		
		<!--
			php字符串
			
				字符串是字符序列，比如"hello world!"
				
				字符串可以是引号内的任何文本。您可以使用单引号或双引号：
		-->
		<?php
			
			$x = "hello world!";
			
			echo $x;
				
			echo "<br />";
			
			$x = 'hello world!';
			
			echo $x;
		?>
		
		<!--
			php整数
			
				整数是没有小数的数字。
				
				整数规则：
					
					整数必须有至少一个数字（0-9）
					
					整数不能包含逗号或空格
			
					整数不能有小数点
					
					整数正负均可
					
					可以用三种格式规定整数：十进制 十六进制（前缀是Ox）或八进制（前缀是O）
					
				var_dump()会返回变量的数据类型和值	
		-->
		
		<?php
			
			echo "<br />";
			
			$x = 5985;
			
			var_dump($x);
			
			echo "<br />";
			
			$x = -123;
			
			var_dump($x);
			
			echo "<br />";
			
			$x = 0x8C;
			
			var_dump($x);
			
			echo "<br />";
			
			$x = 047;
			
			var_dump($x);
			
			echo "<br />";	
		?>
		
		<!--
			php浮点数
				
				浮点数是有小数点或指数形式的数字。
			
		-->
		<?php
			
			$x = 10.365;
			
			var_dump($x);
			
			echo "<br />";
			
			$x = 2.4e3;
			
			var_dump($x);
			
			echo "<br />";			

			$x = 8E-5;
			
			var_dump($x);
			
			echo "<br />";
		?>	
		
		<!--
			php逻辑
			
				逻辑是true或false
			
		-->
		
		<?php
			
			$x = true;
			
			$y = false;
			
		?>	
		<!--
			php数组
				
				数组在以个变量中储存多个值
		-->
		<?php
			
			$colors = array('black','white','orange');
			
			var_dump($colors);
			
			echo "<br />";
		?>
		<!--
			
			php对象
			
				对象是储存数据和有关如何处理数据的信息的数据类型。
				
				在php中，必须明确的声明对象。
				
				首先我们必须声明对象的类，对此，我们用class关键词。类是包含属性和方法的结构。
				
		-->
		<?php
			class Car{
				
				var $color;
				
				function car($color = "green"){
					$this->color = $color;
				}
				function what_color(){
					return $this->color;					
				}
			}	
		?>
		<!--
			
			php null值
			
				特殊的NULL值表示变量无值。NULL是数据类型NULL唯一可能的值。
				
				NULL值标示变量是否为空。也用于区分空字符串与空值数据库。
				
				可以通过把值设置为NULL，将变量清空：
			
		-->
		<?php
			
			$x = 'hello world!';
			
			$x = null;
			
			var_dump($x);
			
		?>
	</body>
</html>
