<?php
 header('Content-Type: text/html; charset=iso-8859-1');
 ?>

<!DOCTYPE html>
<!-- index.html -->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/program-06.css">
		<title>
			ITSE 2302 Program-06: Jesse Strait
		</title>
	</head>
	<body>

<?php 
echo "<h1>ITSE 2302 Program-06: Jesse Strait</h1>";
echo "<hr>";


//Define Planets as constants
define("Jupiter", "Jupiter");
define("Venus", "Venus");
define("Earth", "Earth");
define("Saturn", "Saturn");
define("Mars", "Mars");
define("Neptune", "Neptune");
define("Uranus", "Uranus");
define("Mercury", "Mercury");
define("PlanetNine", "Planet Nine");

function displayPlanets() {
	echo "<strong>";
	echo Jupiter;
	echo ", ";
	echo Venus;
	echo ", ";
	echo Earth;
	echo ", ";
	echo Saturn;
	echo ", ";
	echo Mars;
	echo ", ";
	echo Neptune;
	echo ", ";
	echo Uranus;
	echo ", ";
	echo Mercury;
	echo ", ";
	echo PlanetNine;
	echo "</strong>";
}

echo "<h2>#1. Define Constants for Planets, and display them through call to function..</h2>";
displayPlanets();
echo "<hr>";


echo "<h2>#2. Display weather using the current Month, through date method and function call for display...</h2>";

function weatherByDate() {

	$currentMonth = date('F');
	echo "<strong>";
	if ($currentMonth == 'December' || $currentMonth == 'January' || $currentMonth == 'February') {
		echo "$currentMonth<br>";
		echo "It is chilly winter..<br>";
	}elseif ($currentMonth == 'March' || $currentMonth == 'April' || $currentMonth == 'May') {
		echo "$currentMonth<br>";
		echo "A beautiful spring<br>";
	}elseif ($currentMonth == 'June' || $currentMonth == 'July' || $currentMonth == 'August') {
		echo "$currentMonth<br>";
		echo "The heat of summer.<br>";
	}elseif ($currentMonth == 'September' || $currentMonth == 'October' || $currentMonth == 'November') {
		echo "$currentMonth<br>";
		echo "Fabulous Fall.<br>";
	}else {
		echo "No valid Month!";
	}
	echo "</strong>";
}

weatherByDate();
echo "<hr>";

echo "<h2>#3. Using a switch statement with a user inputed value for a state capital, will return the corrisponding state...</h2>";
?>
<form action="index.php" method="post">
	Enter a State Capital:
	<input type="text" name="capital">
	<input type="submit">
	<br>

<?php
$capitalCity = $_POST["capital"];

switch ($capitalCity) {
	case 'Austin':
		echo "$capitalCity is in the state of Texas.";
		break;
	case 'Montgomery':
		echo "$capitalCity is in the state of Alabama.";
		break;
	case 'Juneau':
		echo "$capitalCity is in the state of Alaska.";
		break;
	case 'Phoenix':
		echo "$capitalCity is in the state of Arizona.";
		break;
	case 'Little Rock':
		echo "$capitalCity is in the state of Arkansas.";
		break;
	case 'Sacramento':
		echo "$capitalCity is in the state of California.";
		break;
	case 'Denver':
		echo "$capitalCity is in the state of Colorado.";
		break;
	case 'Hartford':
		echo "$capitalCity is in the state of Connecticut.";
		break;
	case 'Dover':
		echo "$capitalCity is in the state of Delaware.";
		break;
	case 'Atlanta':
		echo "$capitalCity is in the state of Georgia.";
		break;							
	default:
		echo "State is not located.";
		break;
}
echo "<hr>";

echo "<h2>#4. Using the number of the date, will display Hello, that many times...using WHILE LOOP</h2>";

$currentMonth = (int)date('j');
//echo "$currentMonth";
//echo gettype($currentMonth);
$x = 1;
while ($x <= $currentMonth) {
	echo " $x. ";
	echo "Hello";
	$x++;
}

echo "<hr>";

echo "<h2>#5. Using the number of the date, will display Hello, that many times...using DO WHILE LOOP</h2>";
$y = 1;
do {
	echo " $y. ";
	echo "Hello";
	$y++;
} while ($y <= $currentMonth);

echo "<hr>";

echo "<h2>#6. FOR LOOP, that squares numbers 1-25</h2>";

for ($i=1; $i < 26 ; $i++) { 
	echo "$i<sup>2</sup>= ";
	echo "<strong>";
	echo (pow($i, 2));
	echo "</strong>";
	echo ", ";
}

echo "<hr>";
echo "<h2>#7. Display Array of Months in the year, using for each LOOP..</h2>";

$months = array("January","February","March","April","May","June","July","August","September","October","November","December");

function printMonths($months){
	foreach ($months as $value) {
	echo "$value <br>";
	}
}

printMonths($months);

echo "<hr>";
echo "<h2>#8. Display football quarterbacks and teams using function calls.. </h2>";

function quarterBacks($back, $team) {
	$strongB = "<strong>$back</strong>";
	$strongT = "<strong>$team</strong>";
	echo "$strongB plays for $strongT.";
	echo "<br>";
}

quarterBacks("Wilson","Seahawks");
quarterBacks("Prescott", "Cowboys");
quarterBacks("Rodgers","Packers");
quarterBacks("Brady", "Patriots");
quarterBacks("Ryan", "Falcons");

echo "<hr>";
echo "<h2>#9. Display division by various numerators and denominators, using function calls.. </h2>";

function divNumDen($num, $den) {
	$strNum = "<strong>$num</strong>";
	$strDen = "<strong>$den</strong>";
	if ($den == 0) {
		echo "Can not Divide by ZERO<br>";
	}else {
		$result = $num / $den;
		$strRes = "<strong>$result</strong>";
		echo "$strNum divided by $strDen equals $strRes<br>";
	}
}

divNumDen(4,2);
divNumDen(6,2);
divNumDen(14,7);
divNumDen(26,1);
divNumDen(55,0);


echo "<hr>";
echo "<h2>#10. Display associative array using FOR EACH... </h2>";

$carsArray = array("Ford"=>"F-Series", "Toyota"=>"Camry", "Honda"=>"Civic", "Kia"=>"Soul", "Chevy"=>"Tahoe", "VW"=>"Bug", "Nissan"=>"Sentra");


foreach($carsArray as $x => $x_value) {
    echo "Brand: " . $x . ", Model: " . $x_value;
    echo "<br>";
}


echo "<hr>";
echo "<h2>#11. Display associative array after sorting, based on KEYS ASC, using function... </h2>";

function sortArray($array){

	ksort($array);

	foreach($array as $x => $x_value) {
    echo "Brand: " . $x . ", Model: " . $x_value;
    echo "<br>";
	}
}

sortArray($carsArray);


echo "<hr>";
echo "<h2>#12. Display associative array after sorting, based on VALUES ASC using function... </h2>";

function sortArray2($array){

	asort($array);

	foreach($array as $x => $x_value) {
    echo "Brand: " . $x . ", Model: " . $x_value;
    echo "<br>";
	}
}

sortArray2($carsArray);

echo "<hr>";
echo "<h2>#13. Display Some Super Globals using function... </h2>";


function displaySupers() {
	echo "a) Name of currently executing PHP file: ";
	echo "<strong>";
	echo $_SERVER['PHP_SELF'];
	echo "</strong>";
	echo "<br>";
	echo "b) IP address of host server: ";
	echo "<strong>";
	echo $_SERVER['SERVER_ADDR'];
	echo "</strong>";
	echo "<br>";
	echo "c) Method of Request sent to Server: ";
	echo "<strong>";
	echo $_SERVER['REQUEST_METHOD'];
	echo "</strong>";
	echo "<br>";
	echo "d) IP address of viewing browser: ";
	echo "<strong>";
	echo $_SERVER['REMOTE_ADDR'];
	echo "</strong>";
	echo "<br>";
}

displaySupers();


echo "<hr>";
echo "<h2>#14. Comparing differences in Assoc Arrays dealing with cars. </h2>";

$carsArray2 = array("Ford"=>"Fiesta", "Toyota"=>"Camry", "Honda"=>"Civic", "Tesla"=>"Model 3", "Chevy"=>"Volt", "VW"=>"Bug", "Nissan"=>"Sentra");

function compArray($array1, $array2) {

	$result=array_diff_assoc($array1,$array2);
	//print_r ($result);
	echo "<strong>Differences between Arrays:</strong> <br>";
	foreach($result as $x => $x_value) {
    echo "Brand: " . $x . ", Model: " . $x_value;
    echo "<br>";
	}
}

compArray($carsArray2,$carsArray);

echo "<hr>";
echo "<h2>#15. Display Matches in Assoc Arrays dealing with cars. </h2>";


function matchArray($array1, $array2) {

	$result=array_intersect_assoc($array1,$array2);
	//print_r ($result);
	echo "<strong>Matches between Arrays:</strong> <br>";
	foreach($result as $x => $x_value) {
    echo "Brand: " . $x . ", Model: " . $x_value;
    echo "<br>";
	}
}


matchArray($carsArray2,$carsArray);


echo "<hr>";
echo "<h2>#16. Display if key exists in Array, will use carsArray2. </h2>";



function existKey($array, $key) {

	if (array_key_exists($key,$array))
	  {
	  echo "<strong>TRUE, Key exists!<br></strong>";
	  }
	else
	  {
	  echo "<strong>FALSE, Key does not exist!<br></strong>";
	  }

}

echo "First, we will ask function if Tesla exists in carsArray2, it does: <br>";

existKey($carsArray2, "Tesla");

echo "Second, we will ask function if Mini exists in carsArray2, it does NOT: <br>";

existKey($carsArray2, "Mini");



echo "<hr>";
echo "<h2>#17. Display if value exists in Array, will use carsArray2, and display key at which value is found at.. </h2>";



function existValue($array, $value) {

	if (in_array($value, $array))
	  {
	  $found = array_search($value,$array);
	  echo "<strong>VALUE FOUND AT KEY: $found<br></strong>";
	  }
	else
	  {
	  echo "<strong>VALUE NOT FOUND AT VALUE: $value<br></strong>";
	  }

}

echo "First, we will ask function if Model 3 is in carsArray2, it does: <br>";

existValue($carsArray2, "Model 3");

echo "Second, we will ask function if Cooper is in carsArray2, it does NOT: <br>";

existValue($carsArray2, "Cooper");

echo "<br>";

?>
	</body>
</html>