<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

  //Create a function for your the Euro and give it one parameter
  //Declare a Variable $cost that will equal the functions parameter*1.32
  //Return the variable
  
  //Parameter*1.36 for Rands

  //Parameter*1.42 for Yen

  //Parameter*1.45 for US Dollars

  //Parameters*1.45 for Australian Dollars

?>  

<form id="form1" name="currency" method="post" action="currency.php">
  <fieldset>
    <h3>
      <legend>Calculator</legend>
    </h3>
    <p>
      <label>Enter Amount of Pounds</label>
      <label for="amount"></label>
      <input type="text" name="amount" id="amount" />
    </p>
    <p>
		<select name="currency">
			<option></option>
			<option value="euro">Euro</option>
			<option value="rand">Rands</option>
			<option value="yen">Yens</option>
			<option value="us dollar">US Dolars</option>
			<option value="austdollar">Australian Dolars</option>
		</select>
    </p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Calculate" />
      <br />
    </p>
  </fieldset>
</form>

<p>

<?php

//Requesting Server to access form information

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_REQUEST['amount'])&&is_numeric($_REQUEST['amount'])){
		$pounds=$_REQUEST['amount'];}
	else {
		echo "Please enter a valid amount";
		$pounds=0;}
		if(isset($_POST['currency'])){
		$choice=$_POST['currency'];

  //The $choice variable should start off an IF statement
  //if the $choice is the euro
  //echo should produce £... will be 13.2 Euros
  
  //elseif the other options
  
  //else echo "<br />Please Make a Choice";		
			}

	}
?></p>

</body>
</html>