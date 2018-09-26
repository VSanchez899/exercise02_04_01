<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Process Scholorship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<h2>Process Scholorship</h2>
    <?php
    //this is a varible declaration
    $errorcount = 0;

    function displayRequired($fieldName){
        echo "The field \"$fieldName\" is required! <br>\n";
    }

    function validateInput($data, $fieldName){
        global $errorcount;
        if (empty($data)) {
            displayRequired($fieldName);
            ++$errorcount;
            $retval = "";
        }else {
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return $retval;
    }

     $firstname = validateInput($_POST['fName'], "First Name");
     $lastname = validateInput($_POST['lName'], "Last Name");
     if ($errorcount > 0) {
         echo "$errorcount errors: Please use the \"Back\" button to re-enter the data. <br>\n";
     }else {
        echo "Thank you for filling out the scholorship form, " . $firstname . " " . $lastname . ".";    
     }
     
     
     ?>
</body>
</html>