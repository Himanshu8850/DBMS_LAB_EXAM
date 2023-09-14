<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./new.css">
  </head>
  <body>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="pj2.css" />
  </head>
  <body>
    <div class="main">
      <div class="nav">
        <img class="logo" src="./download.png" alt="" />
        <h1>JABALPUR TRAVELS </h1>
        <br>
        <h2> TAXI BOOKING</h2>
      </div>
      <div class="info">
        <form action="payment.php" method="post">
            <label for="firstname">Name :</label>
            <input type="text" name="fname" />
            <br/><br/>
            <label for="contact">Contact number :</label>
            <input type="text" name="contact" />
            <br/><br/>
            <label for="pickup">Pickup Address :</label>
            <input type="text" name="pickup" />
            <br/><br/>
            <label for="destination">Destination Address :</label>
            <input type="text" name="destination" />
            <br/><br/>
            <table border = 2>
            <tr><td> Select your CAR TYPE:</td><td align = 'right'>
            <select name = "lang">
            <option value = "ECONOMY">  Economy - Rs. 5 per km </option>
            <option value = "STANDARD"> Standard - Rs. 8 per km </option>
            <option value = "PREMIUM">Premium - Rs. 10 per km</option>
            </select></td></tr>
            </table>
            <br><br>
            <label for="tripd">Trip distance :</label>
            <input type="integer" name="tripd" />
            <br/><br/>
            <label for="disc">enter discount amount :</label>
            <input type="integer" name="disc" />
            <br/><br/>
            <button type="submit" value="submit">Proceed to Payment</button>
            </form>
      </div>
    </div>
    
  </body>
</html>

  </body>
</html>
