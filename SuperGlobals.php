<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Super Globals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
     echo "<h3>Superglobals Array \$_SERVER[]</h3>";
     echo "<p>The name of the current script is : ", $_SERVER["SCRIPT_NAME"], "<br>";
     echo "<p>This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br>";
     echo "<p>This script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br>";
     echo "<p>This script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br>";
     echo "<p>This script was executed with the following server address: ", $_SERVER["SERVER_ADDR"], "<br>";
     echo "<p>This script was executed with the following server gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br>";
     echo "<p>This script was executed with the following request: ", $_SERVER["REQUEST_METHOD"], "<br>";
     
     ?>
</body>
</html>