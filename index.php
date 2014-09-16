<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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


<?php
	$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
	$lower = mb_strtolower($source, "UTF-8");
	echo "<p>{$lower}</p>";

	echo "<br>";


	$upper = mb_strtoupper($source, "UTF-8");
	echo "<p>{$upper}</p>";


	$source2 = "selle teksti esimene täht on suur!!!";
	$first = ucfirst($source2);
	echo "<p>{$first}</p>";

	$length = strlen($source2);
	echo $length;

	echo "<br>";

	echo "selle" . trim(" teksti esimene täht") . "on suur!!!";
 ?>

</body>
</html>