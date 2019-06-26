<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YT course</title>
</head>
<body>
<header>
    <h1>PHP Course</h1>
</header>
<ul>
    <li><a href="ytcourse.php">Strings and numbers</a></li>
    <li><a href="ytcourse2.php">User imput</a></li>
    <li><a href="calculator.php">Calculators</a></li>
    <li><a href="arrays.php">Arrays</a></li>
    <li><a href="functions.php">Functions</a></li>
</ul>
<?php
echo "<h1>WORKING with STRINGS</h1>";
echo "<hr>";
echo "<p>Welcome here.</p>";

$characterName = "Joanna";
$characterAge = 48;

$trial1 = "KrEAsgEcb HRl MoCk PoP WWWeeeeee 456";

echo "Jmenuji se $characterName
 and my age is $characterAge 
 and I like the name $characterName
 but I don't like being $characterAge";
echo "<hr>"."<br>Výchozí text: ";
echo $trial1;
echo "<hr><br>Text malými písmeny: ";
echo strtolower($trial1);
echo "<hr><br>Text velkými písmeny: ";
echo strtoupper($trial1);
echo "<hr><br>Ve větě $trial1 je: ";
echo strlen($trial1). "znaků";

$tr2 = "JOHNATAN WICK";
echo "<br>$tr2<br>";
echo strlen($tr2)."<br>";
echo $tr2[0]."<br>";


echo "<hr>";

$veta1 = "I like mugs with pugs";
echo "<br> $veta1";
$modifyveta1 = str_replace("mugs", "everything", $veta1);
echo "<br> $modifyveta1";

echo "<h1>WORKING with NUMBERS</h1>";
echo "<br>";
$a = 11;
$b = 3;
$a++;
$c = $a/$b;
$zbytek = $a%$b;
echo "po vydělení čísla $a číslem $b dostáváme 
výsledek $c a zbytek $zbytek <br>";
echo $a;
echo "Tohle nefunguje!!!"

?>


</body>
</html>