 <?php
	$x = "Hello world!";
	$y = 'Welcome to my world.';

	echo $x;
	echo "<br>";
	echo $y;
	echo "<br>";
	echo strlen($y);
	echo "<br>";
	echo str_word_count($x);
	echo "<br>";
	echo strrev("Welcome to my world.");
	echo "<br>";
	echo strpos($y, "world");
	echo "<br>";
	echo str_replace("Welcome","Yokoso", "Welcome to my world.");
	echo "<br>";
	echo str_replace("world","sekai", "Welcome to my world.");
?> 
