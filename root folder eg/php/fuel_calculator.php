<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

  //Create 4 Functions, one for each fuel type
  //Each Function should contain a variable $amount

  //Unleaded = x 1.28

  //Diesel = x 1.34

  //Super Unleaded = x 1.32

  //Premium Diesle = x 1.36

?>

<form id="form1" name="fuel" method="post" action="fuelcalculator.php">
  <fieldset>
    <h3>
      <legend>Fuel Calculator</legend>
    </h3>
    <p>
      <label>Enter Amount of Fuel in Litres</label>
      <label for="amount"></label>
      <input type="text" name="amount" id="amount" />
    </p>
    <p>
      <label>
        <input type="radio" name="fuel" value="Unleaded" id="fuel_0" />
        Unleaded</label>
      <br />
      <label>
        <input type="radio" name="fuel" value="Diesl" id="fuel_1" />
        Diesel</label>
      <br />
      <label>
        <input type="radio" name="fuel" value="Super Unleaded" id="fuel_2" />
        Super Unleaded</label>
      <br />
      <label>
        <input type="radio" name="fuel" value="Premium Diesel" id="fuel_3" />
        Premium Diesel</label>
    </p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Calculate" />
      <br />
    </p>
  </fieldset>
</form>

<?php

  //Create an IF statement that will allow the server to request the information that is entered into the above form

  //Use the request method oultined in the HTML table above. If the value isn't NULL and is numeric, request the 'amount' and apply the value entered into a variable
  //else echo "please enter a valid amount"
  //use the $_POST Superglobal gather the data from the 'fuel' information


  //Create another IF statement saying if $choice = Unleaded it will echo the correct value + " of unleaded fuel will cost &pound;" + amount

  //elseif $choice = Diesel it will echo the correct value + " of Diesel fuel will cost &pound;" + amount

  //elseif $choice = Super Unleaded it will echo the correct value + " of Super Unleaded fuel will cost &pound;" + amount

  //elseif $choice = Premium Diesel it will echo the correct value + " of Premium Diesel fuel will cost &pound;" + amount

  //Add a default value saying "<br/ >Please make a choice"


?>

</body>
</html>