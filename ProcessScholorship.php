<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Process Scholorship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Process Scholorship</h2>
    <?php
     $firstname = stripslashes($_POST['fName']);
     $lastname = stripslashes($_POST['lName']);
     echo "Thank you for filling out the scholorship form, " . $firstname . " " . $lastname . ".";
     
     ?>
</body>
</html>