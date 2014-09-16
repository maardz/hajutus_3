<html>
<head>
	<title></title>
</head>
<body>

<h2>Muutujad</h2>

<?php
    $variable = 10;
    echo $variable;
    
    echo "<br>";

    $variable = 20;
    echo $variable;
?>

<h2>String</h2>

<?php
    echo "Hello world!";

    echo "<br>";
?>

<?php 
	echo "24";
	echo "<br>";
	echo "26";
	echo "<br>";
	echo "2426";
	echo "<br>";
?>

<?php
	$firstName = "Marge";
	$lastName = "Molder";

	$fullName = $firstName. " ".$lastName;
	echo $fullName;
	echo "<br>";
?>

<?php
	$test = "Testime";	
	echo "$test kas interpolatsioon töötab";
	echo "<br>";
?>
<?php
	$katse = "proov";
	echo "Me peame {$katse}ima, kas ka ka nii saab.";
?>
</body>
</html>