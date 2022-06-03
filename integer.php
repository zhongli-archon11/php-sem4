<?php  
	$x = 5985;
	$y = 34567.6;
	$z = -24066;
	
	echo "x= ".($x)."<br>";
	echo "y= ".($y)."<br>";
	echo "z= ".($z)."<br>";

	echo "<h4>MATH</h4>";
	echo "Sum=".($x+$y);
	echo "<br>";
	
	echo "Min= ".(min($x,$y,$z));
	echo "<br>";
	echo "Max= ".(max($x,$y,$z));
	echo "<br>";
	echo "Absolute of z= ".(abs($z));
	echo "<br>";
	echo "Square of x= ".(sqrt($x));
	echo "<br>";
	echo "Rounding off y= ".(round(0.49));
	echo "<br>";
	echo "Pi= ".(pi());
	//echo "Generating a random number= ".((rand(10, 100));
	
	echo "<hr>";
	echo "<br>";
	
	echo "If x is an integer- ";
	var_dump(is_int($x));
	
	echo "<br><br>"."If y is a float variable: ";
	var_dump(is_float($y));
	echo "<br>";
	
	echo "<br>";
	$a = 1.9e411;
	echo "a= ".($a)."<br>"."If a is finite or infinite: ";
	var_dump($a);
	echo "<br>";
	
	echo "<br><br>";
	$b = acos(8);
	echo "b= ".($b)."<br>"."If b is a number or not: ";
	var_dump($b);
	
	echo "<hr>";
	echo "<br>";
	
	echo "<h4>To check if the variable is numeric:</h4>";
	$c = 5985;
	echo "v1= ".($c)."<br>";
	var_dump(is_numeric($c));

	echo "<br>";
	$d = "5985";
	echo "<br>"."v2= ".($d)."<br>";
	var_dump(is_numeric($d));

	echo "<br>";
	$e = "59.85" + 100;
	echo "<br>"."v3= ".($e)."<br>";
	var_dump(is_numeric($e));

	echo "<br>";
	$f = "Hello";
	echo "<br>"."v4= ".($f)."<br>";
	var_dump(is_numeric($f));
	
	echo "<hr>";
	echo "<br>";
	
	echo "Casting float to int: ";
	$n1 = 23465.768;
	$int_cast = (int)$n1;
	echo $int_cast;

	echo "<br>";

	echo "Casting string to int: ";
	$n2 = "18763";
	$int_cast = (int)$n2;
	echo $int_cast;
	
	
?>  

