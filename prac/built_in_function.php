<?php
	
	$a=abs(-.42);
	$b=sqrt(25);
	$c=round(12.3);
	$d=round(12.6);
	
	$s=time();
	
	echo "abstruvt".$a.'<br/>';
	echo "squre root".$b.'<br/>';
	echo "round".$c.'<br/>';
	echo "round".$d.'<br/>';
	
	print date("m/d/y",$s).'<br/>';
	print date("D/F iS",$s).'<br/>';
	print date("I,F iS Y",$s).'<br/>';

?>