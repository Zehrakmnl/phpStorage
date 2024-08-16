<!-- Variables & constants and Strings -->

<?php
	# if i use '$name' twice , it's value last one. but if i use define() its an error occour.
	define('NAME', 'Zany');
	$name = "Zany";
	$age = "777";
	$name = "zany";
 
	$stringOne = 'email';
	$stringOne = 'password';
	// echo $stringOne;
	
	$stringOne = 'email';
	$stringTwo = 'password';
	echo $stringOne . $stringTwo;

	// echo 'Hey my name is ' . $name;
	// echo "Hey my name is $name";

	// echo "when you hungry you should scream \"whaaaaa\"";
	// echo 'this scream should like "whaaaoo"';

	echo $name[0];
	echo strlen($name);
	echo strtoupper($name);
	echo strtolower($name);
	echo str_replace('a', 'e', $name);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pizza Game</title>
</head>
<body>
	
	<h1><?php echo 'Do you want to eat pizza ?';?></h1>

	<div><?php  echo $name; ?></div>
	<div><?php  echo NAME; ?></div>
	<div><?php  echo $age; ?></div>

</body>
</html>

