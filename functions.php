<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YT course</title>
</head>
<body>
<h1>PHP Course</h1>
<ul>
    <li><a href="ytcourse.php">Strings and numbers</a></li>
    <li><a href="ytcourse2.php">User imput</a></li>
    <li><a href="calculator.php">Calculators</a></li>
    <li><a href="arrays.php">Arrays</a></li>
    <li><a href="functions.php">Functions</a></li>
</ul>

<?php
function sayHi($name){
    echo "Hello $name <br>";
}

sayHi("Mike");
sayHi("Andrea");
sayHi("Collette");
?>

<h2>Return Statements</h2>
<?php
function cube($num){
$sol = $num * $num * $num;
}
cube(4);
echo $sol;

?>
</body>
</html>