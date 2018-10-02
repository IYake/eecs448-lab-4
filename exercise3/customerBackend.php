<?php 
$username = $_POST["username"];
$shippingOption = $_POST["clay_shippingOption"];
$password = $_POST["password"];
$clayNum = $_POST["clayNum"];
$engNum = $_POST["engNum"];
$concNum = $_POST["concNum"];

echo "<link href="style.css" rel="stylesheet" type="text/css"/>";
echo "Welcome " . $username . "!<br>";
echo "Your password is: " . $password;
echo "<table>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Clay Brick</th><th>" . $clayNum . "</th><th>$5</th><th>$" . $clayNum*5 ."</th></tr>";
echo "<tr><th>Engineering Brick</th><th>" . $engNum . "</th><th>$10</th><th>$" . $engNum*10 ."</th></tr>";
echo "<tr><th>Concrete Brick</th><th>" . $concNum . "</th><th>$8</th><th>$" . $concNum*8 ."</th></tr>";
echo "</table>";
 ?>