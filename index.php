<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * URL: http://dkovalevich.greenriverdev.com/it328/cupcakes/
 * Date: 1/8/19
 * Time: 3:33 PM
 */
$cupcakeFlavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon", "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");
$countSelected = count($_POST['cupcakeFlavors']);
$formHidden = false;
$checkCheckbox = false;

if (!empty($_POST)) {
    $validForm = true;

    if (empty($_POST['username'])) {
        echo  "<p>Please enter in your name.</p>";
        $validForm = false;
    }
    if (!isset($_POST['cupcakeFlavors'])) {
        $checkCheckbox = true;
        $validForm = false;
    } else {
        $cupcakesSelected = ($_POST['cupcakeFlavors']);
    }

    if ($validForm) {
        $formHidden = true;
        echo "<h4>Thank you " . $_POST['username'] . " for your order!</h4>";
        echo "Order Summary:";
        echo '<ul>';
        echo '<li>' . implode('</li><li >', $cupcakesSelected) . '</li>';
        echo '</ul>';
        echo  '<p>Order Total: $' . $countSelected * 3.5 . '</p>';
    }
}

if ($checkCheckbox) {
    echo "<p style='color: red'>At least one cupcake is required.</p>";
    $checkCheckbox = false;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Review: Cupcakes</title>
</head>
<body>
<section id="sectionForm" <?php if($formHidden) echo "style='display: none'" ?>>
    <h1>Order Cupcakes</h1>
    <form method="post" action="">
        Enter your name: <input type="text" name="username" id="username" placeholder="Enter your name here" value="<?php echo $_POST['username']; ?>" required><br><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="grasshopper" value="<?php print_r($cupcakeFlavors["grasshopper"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["grasshopper"])?><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="maple" value="<?php print_r($cupcakeFlavors["maple"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["maple"])?><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="carrot" value="<?php print_r($cupcakeFlavors["carrot"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["carrot"])?><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="caramel" value="<?php print_r($cupcakeFlavors["caramel"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["caramel"])?><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="velvet" value="<?php print_r($cupcakeFlavors["velvet"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["velvet"])?><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="lemon" value="<?php print_r($cupcakeFlavors["lemon"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["lemon"])?><br>
        <input type="checkbox" name="cupcakeFlavors[]" id="tiramisu" value="<?php print_r($cupcakeFlavors["tiramisu"]); ?>">&nbsp;<?php print_r($cupcakeFlavors["tiramisu"])?><br><br><br>
        <input type="submit" name="submit" value="Submit" id="submit">
    </form>
</section>

</body>
</html>
