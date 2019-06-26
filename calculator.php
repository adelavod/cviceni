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
<div class="row" style="width: 100%">
    <div class="container" style="width=300px">
        <h2>Basic calculator.</h2>

        <form action="calculator.php" method="get">
            <input type="number" name="num1"><br>
            <input type="number" name="num2"><br>

            <input type="submit">
        </form>


        <?php
        if (isset($_GET['num1'])&&(isset($_GET['num2'])))
        {
            echo $_GET['num1'] + $_GET['num2'];
        }
        ?>

        <h2>Word game.</h2>
        <form action="calculator.php" method="get">
            Color: <input type="text" name="color"><br>
            Plural noun: <input type="text" name="pluralnoun"><br>
            Celebrity: <input type="text" name="celebrity"><br>
            <input type="submit">
        </form>
        <?php
        // if (isset($_GET['color'])&&isset($_GET['pluralnoun']))

        $color = "red";
        $pluralnoun = "violets";
        $celebrity = "you";

        if (isset($_GET['color'])&&(isset($_GET['pluralnoun']))&&(isset($_GET['celebrity'])))
        {
            $color = $_GET['color'];
            $pluralnoun = $_GET['pluralnoun'];
            $celebrity = $_GET['celebrity'];
        }


        echo "Roses are $color<br>";
        echo "$pluralnoun are blue<br>";
        echo "I love $celebrity <br>";
        ?>

        <h2>URL Parameters!</h2>
        <form action="calculator.php" method="get">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form>
        <br>
        <?php
        if (isset($_GET['age'])) {
            echo $_GET["age"];
        }
        ?>


    </div>

    <div class="container" style="width=300px">
        <h2>POST method - password.</h2>
        <form action="calculator.php" method="post">
            type your password: <input type="password" name="password"><br>
            <input type="submit">
        </form>
        <br>
        <?php
        if (isset($_POST['password'])) {
            echo "Your password is: " . $_POST["password"] . ". Very safe.";
        }
        ?>
    </div>
</div>

</body>
</html>