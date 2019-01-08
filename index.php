<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 1/8/19
 * Time: 3:33 PM
 */

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
    <h4>Enter your name:</h4>
    <input type="text" name="username" id="username" placeholder="Enter your name here" value="<?php echo $_POST['username']; ?>" required>
</form>
</body>
</html>
