<!--
	php运算符
-->
<!--	 php算数运算符 -->

<?php
	echo "php算数运算符";
	echo "<br />";
	$x = 10;
	$y = 6;
	
	echo '$x','+','$y','=',($x + $y);
	echo "<br />";
	echo ($x - $y);
	echo "<br />";
	echo ($x * $y);
	echo "<br />";
	echo ($x / $y);
	echo "<br />";
	echo ($x % $y);	
	echo "<br />";
?>
<!-- php赋值运算符 -->
<!-- php赋值运算符用于向变量写值 -->
<!-- php中基础的赋值运算符是“＝”。这意味着右侧赋值表达式会为左侧云算数设置值。-->

<?php
	
	echo "php赋值运算符";
	
	echo "<br />";
	$x = 10;
	echo $x;
	echo "<br />";
	
	$y = 20;
	$y += 100;
	echo $y;
	echo "<br />";
	
	$z = 50;
	$z -= 25;
	echo $z;
	echo "<br />";
	
	$i = 5;
	$i *= 6;
	echo $i;
	echo "<br />";
	
	$j = 10;
	$j /= 5;
	echo $j;
	echo "<br />";
	
	$k = 15;
	$k %= 4;
	echo $k;
	echo "<br />";	
?>

<!-- php字符串运算符 -->

<?php
	echo "php字符串运算符";
	
	echo "<br />";	
	$a = "Hello";
	$b = $a . " world!";
	echo $b;
	echo "<br />";
	
	$x = "Hello";
	$x .= " world!";
	echo $x;
	echo "<br />";	
	
?>	

<!-- php递增/递减运算符 -->

<?php
	echo "php递增/递减运算符";
	
	echo "<br />";		
	$x = 10;
	echo ++$x;
	echo "<br />";
	
	$y = 10;
	echo $y++;
	echo "<br />";
	
	$z = 5;
	echo --$z;
	echo "<br />";
		
	$i=5;
	echo $i--;
	echo "<br />";
	
?>

<!-- php比较运算符 -->

<?php
	echo "php比较运算符";
	
	echo "<br />";	
	$x=100; 
	$y="100";
	
	var_dump($x == $y);
	echo "<br />";
	var_dump($x === $y);
	echo "<br />";
	var_dump($x != $y);
	echo "<br />";
	var_dump($x !== $y);
	echo "<br />";
	
	$a=50;
	$b=90;
	
	var_dump($a > $b);
	echo "<br />";
	var_dump($a < $b);		
?>	

<!-- php逻辑运算符 -->

<!--

	运算符
	
	and 与
	
	or 或
	
	xor 异或
	
	&&	与
	
	|| 或
	
	! 非
	
-->
<!-- php数组运算符 -->
<!--
	
	运算符
		
	+	联合   $x + $y	$x 和 $y 的联合（但不覆盖重复的键）
	==	相等   $x == $y	如果 $x 和 $y 拥有相同的键/值对，则返回 true。
	===	全等   $x === $y	如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回 true。
	!=	不相等 $x != $y	如果 $x 不等于 $y，则返回 true。
	<>	不相等 $x <> $y	如果 $x 不等于 $y，则返回 true。
	!==	不全等 $x !== $y	如果 $x 与 $y 完全不同，则返回 true。		
		
-->
<?php
	echo "<br />";	
	echo "php数组运算符";
	$x = array("a" => "red", "b" => "green"); 
	$y = array("c" => "blue", "d" => "yellow"); 
	$z = $x + $y; // $x 与 $y 的联合
	echo "<br />";
	var_dump($z);
	echo "<br />";
	var_dump($x == $y);
	echo "<br />";
	var_dump($x === $y);
	echo "<br />";
	var_dump($x != $y);
	echo "<br />";
	var_dump($x <> $y);
	echo "<br />";
	var_dump($x !== $y);	

?>