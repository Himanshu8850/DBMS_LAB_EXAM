<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./new.css">

</head>
<body>
    <center><div>
    <h1>BOOKING SUCCESSFULL</h1>
    <h2>YOUR CAB WILL ARRIVE AT PICKUP ADDRESS SHORTLY</h2>
    <?php
    if($_POST['lang']=="bhacre"||$_POST['lang']=="bhade"){
        echo "<h2>EXTRA 5% DISCOUNT GIVEN</h2>";
    }
    ?>
    </div>
</center>
</body>
</html>