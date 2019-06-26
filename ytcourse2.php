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

    <h2>Procvičujeme user imput</h2>
    <form action="ytcourse2.php" method="get">
Name: <br><input type="text" name="name">
        <br>
Age:  <br><input type="number" name="age"><br>
        <input type="submit">
    </form>
<?php
if (isset($_GET['name']) && isset($_GET['age'])){
    echo "Your name is " . $_GET["name"] .
        " and your age is " . $_GET["age"];
}
else{echo "Nic jste nevložili";}



?>

</body>
</html>
