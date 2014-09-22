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

 <h2>Täisarvud</h2>

 <?php 
 	$nr1 = 12;
 	$nr2 = 5;

 	echo $nr1 -$nr2 ;
 	echo "<br>";
 ?>

 <?php
 	echo abs(-300);
 	echo "<br>";

  ?>

 <?php
    
    echo pow(5, 2);
    echo "<br>";

    echo pow(7, 3);
    echo "<br>";

    echo pow(3, 7);
    echo "<br>";
?>

<?php
    echo sqrt(25);
    echo "<br>";
?>

<?php
   
    echo rand();    
    echo "<br>";
    echo rand(7, 22);
    echo "<br>";
?>

<?php
    $sample_nr = 45;
    $sample_nr = $sample_nr + 5;
     echo $sample_nr;
     echo "<br>";
?>

<?php
    $sample_nr2 = 45;
    $sample_nr2 += 5;
    echo $sample_nr2;
     echo "<br>";
?>

<?php
    $sample_nr2 = 45;
    $sample_nr2 -= 5;
    echo $sample_nr2;
    echo "<br>";
?>

<?php
    $sample_nr3 = 45;
    $sample_nr3 *= 5;
    echo $sample_nr3;
    echo "<br>";

    $sample_nr2 = 45;
    $sample_nr2 /= 5;
    echo $sample_nr2;
    echo "<br>";
?>

<?php
    echo 5 . " teksapüksid";
    echo "<br>";
?>

<?php
    echo 5 + " teksapüksid";
    echo "<br>";
?>

<?php
    echo 5 + "5";
    echo "<br>";
?>

<?php
    echo 5 + "7 teksapüksi";
?>

</body>
</html>