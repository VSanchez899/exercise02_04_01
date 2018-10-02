<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
function calWage(){
    $hours = $_POST['hours'];
    $wage = $_POST['wage'];
    if ($hours > 40){
        $overHours = ($hours - 40);
        $overtime = (1.5 * $wage);
         $totalGross = (40 * $wage);
         $netPay = ($overHours * $overtime) + $totalGross;
        echo "<p style='text-align: center;'> \$$netPay is your paycheck including overtime</p>";
    }else{
        $noOvertime = ($hours * $wage);
        echo "<p style='text-align: center;'>you made this much \$$noOvertime but didn't have any overtime pay";
    }
}
calWage();
?>    
<li style="text-align: center;"><a href="Paycheck.html">Go Home</a></li>
</body>
</html>


