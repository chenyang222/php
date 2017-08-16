
<!--
	PHP字符串函数
		
-->
<!--
		php strlen()函数
		
			strlen()函数返回字符串的长度，以字符计。	
-->
<?php
	
	echo strlen("hello world!");	
	
?>
<!--
		php strpos()函数
		
			strpos()函数用于检索字符串内指定的字符或文本。
			
			如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回false
				
-->
<?php
	
	echo strpos('hello world !',"world");
		
	//字符串中首字符的位置是0而不是1	
?>