<!--
	
	php条件语句
	
		条件语句用于基于不同条件执行不同的动作
		
			1. if 语句 - 如果指定条件为真，则执行代码。
			2. if...else 语句 - 如果条件为true，则执行代码；如果条件为false,则执行另一端代码。
			3. if..elseif..else 语句 - 选择若干段代码块之一来执行
			4. switch 语句 － 语句多个代码块之一来执行		
		
-->

<!--
		php - if语句
		
			if语句用于在指定条件为true时执行代码
			
			语法
			
				if(条件){
					
					当条件为true时执行的代码；
							
				}
-->
<?php
	
	$t = date('H');
	
	if($t < '20'){
		echo "Have a good day!";
	}
	
	echo "<br />"; 
	
?>

<!--
		php - if...else语句
			
			请使用if..else语句在条件为true时执行代码，在条件为false时执行另一段代码。
			
			语法
				
				if(条件){
					条件为true时执行的代码;
				}else{
					条件为false时执行的代码;
				}

-->
<?php
	
	$t = date('H');
	
	if( $t < '20' ){
		echo "Have a good day!";
	}else{
		echo "Have a good night!";
	}	
	
	echo "<br />"; 
?>	


<!--
		php - if..elseif..else语句
	
			请使用if..elseif..else语句来选择若干代码块之一来执行。
			
			语法
				
				if(条件){
					条件为true时执行的代码;
				}elseif(condition){
					条件为true时执行的代码;
				}else{
					条件为false时执行的代码;
				}
-->
<?php
	
	$t = date("H");
	
	if($t < '10'){
		echo "Have a good morning!";
	}elseif($t<'20'){
		echo "Have a good day!";
	}else{
		echo "Have a good night!";
	}
	
	echo "<br />"; 
?>

<!--
		php - switch语句
		
			switch语句用于基于不同条件执行不同动作。
			
			如果您希望有选择地执行若干代码块之一，请使用Switch语句。
			
			使用Switch语句可以避免冗长的if..elseif..else代码块。	
		
			语法
			
				switch(expression)
				{
					case label1:
						code to be executed if expression = label1;
						break;
					case label2:
						code to be executed if expression = label2;
						break;
					default:
						code to be executed
						if expression is different
						from both label1 and label2;
				}
				
				工作原理:
					1.对表达式（通常是变量）进行一次计算
					2.把表达式的值与结构中case的值进行比较
					3.如果存在匹配，则执行与case关联的代码
					4.代码执行后，break语句阻止代码跳入下一个case中继续执行
					5.如果没有case为真，则使用default语句
-->
<?php
	
	switch($x)
	{
		case 1:
			echo "Number 1";
			break;
		case 2:
			echo "Number 2";
			break;
		case 3:
			echo "Number 3";
			break;
		default:
			echo "No number between 1 and 3";				
	}	
?>