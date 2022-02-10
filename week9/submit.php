<?php

$servername = "sql1.njit.edu";
$username = "zma4";
$password = "Z_viper908";
$dbname = "zma4";
$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {

$name = $_POST['name'];
$item = $_POST['item'];
$quantity = $_POST['Quantity'];
$price = $_POST['Price'];
$tax = $_POST['tax']/100;

$total = ($price*$quantity)*($tax+1);

echo $name;

echo "<br>";

echo "You are purchasing " . $quantity . " " . $item . " (s) at the price of $" . $price . " per piece. The total cost including tax is $<b>" . $total . "</b>";
}

?>