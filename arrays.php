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
<h2>Arrays</h2>
<?php
$friends = ['Adéla', 'Marek'];
echo $friends[1] = "Dwight";
$num = count($friends);

$friends[$num] = "Monica";
var_dump($friends);
echo "<br>" . $friends[2];
?>

<h2>Checkboxes</h2>
<form action="arrays.php" method="post">
Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
Pears:    <input type="checkbox" name="fruits[]" value="pears"><br>
Grapes:    <input type="checkbox" name="fruits[]" value="grapes"><br>
Strawberries:     <input type="checkbox" name="fruits[]" value="strawberries"><br>
    <input type="submit">

    <?php
    $fruits = $_POST["fruits"];

    var_dump($fruits);

    ?>

    <h2>Associative Arrays</h2>

    <?php
    $grades = array("Jim"=>"A+",
        "Pam"=>"B-",
        "Lorraine"=>"C",
        "Oscar"=>"B");
    ?>
<p>Zde učitel přidá další dvojici žák - známka a uloží to do pole:</p>
    <form action="arrays.php", method="post" value="grades">
        <input type="text" name="student"><br>
        <input type="text" name="znamka"><br>
        <input type="submit"><br>
    </form>

    <?php

    $grades[$_POST["student"]]=$_POST["znamka"];
    var_dump($grades);
    ?>

    <h2>Count values by key</h2>
    <?php
    $produkty = array(
            "1"=>["name"=>"taška",
                "amount"=>10,
                "price"=>14.90],
        "2"=>["name"=>"penál",
            "amount"=>2,
            "price"=>30],
        "3"=>["name"=>"tužka",
            "amount"=>100,
            "price"=>4.50],
    );

    $celkemproduktu = array_sum(array_column($produkty, 'amount'));
    echo "<br> $celkemproduktu";
    ?>

</form>
</body>
</html>

