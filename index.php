<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 1/8/19
 * Time: 3:33 PM
 */

$cupcakeFlavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon", "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Review: Cupcakes</title>
</head>
<body>
<h1>Order Cupcakes</h1>
<form method="post" action="">
    Enter your name: <input type="text" name="username" id="username" placeholder="Enter your name here" value="<?php echo $_POST['username']; ?>" required><br><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="grasshopper">&nbsp;<?php print_r($cupcakeFlavors["grasshopper"])?><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="maple">&nbsp;<?php print_r($cupcakeFlavors["maple"])?><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="carrot">&nbsp;<?php print_r($cupcakeFlavors["carrot"])?><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="caramel">&nbsp;<?php print_r($cupcakeFlavors["caramel"])?><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="velvet">&nbsp;<?php print_r($cupcakeFlavors["velvet"])?><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="lemon">&nbsp;<?php print_r($cupcakeFlavors["lemon"])?><br>
    <input type="checkbox" name="cupcakeFlavors[]" id="tiramisu">&nbsp;<?php print_r($cupcakeFlavors["tiramisu"])?><br><br><br>
    <input type="submit" name="submit" value="Submit Order" id="order">
</form>
</body>
</html>
