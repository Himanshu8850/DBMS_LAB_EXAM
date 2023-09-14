<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./new.css">
  </head>
  <body>
    <div class="main">
      <div class="nav">
        <img class="logo" src="./download.png" alt="" />
        <center><h1>JABALPUR TRAVElS</h1></center>
        <center><h1>PAYMENT INFO</h1></center>
      </div>
        <br>
        <br>
        <div class = "details">
       <?php
        $c = $_POST['lang'];
        $b = $_POST['tripd'];
        $d = $_POST['disc'];
        if($c=="ECONOMY"){
            $a = 5;
        }
        else if($c=="STANDARD"){
            $a = 8;
        }
        else{
            $a = 5;
        }
        $e = $a*$b;
        if($d<=($e/2)){
            $e = $e-$d;
        }
        else{
            echo "<center><h3>Discount was greater than half of the TOTAl EXPENSE<br>No discount will be applied</h3></center><br>";
        }
       echo "<h2><center>NAME :".$_POST['fname']."</center></h2>";
       echo "<h2><center>PAYMENT AMOUNT :".$e."</center></h2>"; 
       ?>
        <center><form action="success.php" method="post">
        <table border = 2>
            <tr><td> Select MODE OF PAYMENT:</td><td align = 'right'>
            <select name = "lang">
            <option value = "credit"> CREDIT CARD </option>
            <option value = "bhacre"> CREDIT CARD bharat bank 5% off</option>
            <option value = "bhade"> DEBIT CARD on bharat bank 5% off</option>
            <option value = "debit">DEBIT CARD</option>
            <option value = "cash">CASH</option>
            <option value = "UPI">UPI</option>
            </select></td></tr>
            <br>
            <button type="submit" value=“submit">PAY</button>
       </form></center>
       <br>
       <center><form action="taxiser.php" method="post">
            <button type="submit" value="submit">GO TO PREVIOUS PAGE</button>
            </form></center>
       </div>
    </div>
  </body>
</html>

