<?php
	
	class fibo{
		
		function a(){
	       echo "the line number is=".__LINE__."<br>";
		}
		function b(){
		
		  echo "the php version  is=".PHP_VERSION ."<br>";
		}
		function c(){
		  echo "the php os  is=".PHP_OS ."<br>";
		}
		function d(){
	       echo "the php MAXIMUM RANGE OF INTEGER  is=".PHP_INT_MAX ."<br>";
		}
		function e(){
	       echo "the php SIZE OF A INTEGER MEMORY is=".PHP_INT_SIZE ."<br>";
		}
		function f(){
		   echo "the php default include path  is=".DEFAULT_INCLUDE_PATH ."<br>";
		}
		function g(){
		   echo "the php FILE  is=".__FILE__ ."<br>";
		}
	 
	}
	
	      $ob= new fibo();

				 $ob->a();
				  $ob->b();
				   $ob->c();
				    $ob->d();
					 $ob->e();
					  $ob->f();

?>