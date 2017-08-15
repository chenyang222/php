<?php
	
	/*
	 *   PHP echo和print语句
	 *		
	 * 		在php中，有两种基本的输出方法：echo和print
	 * 
	 * 		echo和print之间的差异：
	 * 			
	 * 			echo－能够输出一个以上的字符串
	 * 
	 * 			print－只能输出一个字符串，并始终返回1
	 * 
	 * 			注：echo比print稍快，因为它不返回任何值
	 * 
	 */

	//echo 是一个语言结构，有无括号均可使用：echo或echo()
	
	echo "<h2>PHP is fun !</h2>";
	echo "Hello world !<br>";
	echo "I'm about to learn PHP!<br>";
	echo "This ","string ","was ","made "," with multiple parameters.";	
	
	$txt1 = "learn PHP";
	$txt2 = "W3School.com.cn";
	$cars = array("Volvo","BMW","SAAB");
	
	echo "<br />";
	echo $txt1;
	echo "<br />";
	echo "Study PHP at $txt2";	
	echo "My car is {$cars[0]}";
	
	//print 也是语言结构，有无括号均可使用：print 或 print()。
	
	print "<h2>PHP is fun!</h2>";
	print "Hello world!<br>";
	print "I'm about to learn PHP!";	
	
	$txt3="Learn PHP";
	$txt4="W3School.com.cn";
	$cars2=array("Volvo","BMW","SAAB");
	
	print $txt3;
	print "<br>";
	print "Study PHP at $txt4";
	print "My car is a {$cars2[0]}";	
	
?>