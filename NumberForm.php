<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Number Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <h2>Number form</h2>
    <?php
    $displayForm = true;
    $number = "";
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $displayForm = false;
        } else {
            echo "<p>YOU NEED TO ENTER A NUMERIC VALUE DUMMY!!!</p>";
            $displayForm = true;
        }
        
    }
    if($displayForm){
    ?>
    <form name="numberForm" action="NumberForm.php" method="post" >
        <p>
            Enter a number: <input type="text" name="number" value="<?php echo $number;?>">
        </p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" name="submit" value="Send Form">
        </p>
    </form>
    <?php
    }
    else {
        echo "Thank you for entering a NUMBER FINALLY YOU DUMMY!!";
        echo "<p> Your number, $number, squared is " . ($number * $number) . "</p>\n";
        echo "<p><a href=\"NumberForm.php\">Try Again<a></p>\n";
        }
     ?>

</body>
</html>