<!--
	
	php for循环
		
		php for 循环执行代码块指定的次数。
		
		PHP for 循环
		
			如果您已经提前确定脚本运行的次数，可以使用for循环。
			
			语法
			
				for( init counter; test counter; increment counter){
					code to be executed;
				}	
				
				参数
					
					init counter：初始化循环计数器的值
					test counter：评估每个循环迭代。如果值为TRUE,继续循环。如果它的值为FALSE，循环结束。
					increment counter：增加循环计数器的值
-->
<?php

	for( $x=0; $x<=10;$x++){
		
		echo "数字是: $x <br />";
		
	}
	
?>
<!--
		php foreach循环
		
			foreach 循环只适用于数组，并用于遍历数组中的每个键／值对。
			
			语法
				
				foreach($array as $value){
					code to be executed;
				}
						
				每进行一次循环迭代，当前数组元素的值就会被赋值给$value变量，并且数组指针会逐一地移动，直到到达最后一个数组元素。
				
-->
<?php

	$colors = array('red','green','blue','yellow');
	
	foreach($colors as $value){
		
		echo "$value <br />";
		
	}
		
?>	


