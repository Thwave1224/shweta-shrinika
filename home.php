<?php 
 include "config1.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hello, Welcome <?php echo $_SESSION['user_name']; ?></h2>

    <button class="btn btn-dark"><a href="login.php">Logout</a></button>
</body>

</html>