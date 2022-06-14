<?php

	function sayhello()
	{
		//function xyz->local function;
		echo "HELLO PHP! <br>";
	}
	sayhello();
	
	function sayhelloname($name)
	{
		echo "Hello $name <br>";
	}
	sayhelloname("Handiqueens");
	
	function addnum($a,$b)
	{
		$sum= $a + $b;
		return $sum;
	}
	$add = addnum(70,80);
	echo "SUM is $add <br>";
	
	function factorial($num)
	{
		$fact=1;
		for($i=1;$i<=$num;$i++)
		$fact*=$i;
		return $fact;
	}
	$res=factorial(7);
	echo "Factorial of 7 is $res<br>";
	
	function isprime($num)
	{
		$flag=0;
		for($i=2;$i<=$num/2;$i++)
		{
			if($num%$i==0)
			{
				$flag++;
				break;
			}
		}
		if($flag==0)
			return true;
		else
			return false;
	}
	if(isprime(15))
		echo "15 is a prime number <br>";
	else
		echo "15 is a prime number <br>";

?>
