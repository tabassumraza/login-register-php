<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["u_id"])){
        echo"<h1>".$_SESSION["u_name"]."</h1>";
        echo "<a href='login.php'>logout</a>";
    }
    else {
        echo "<a href='login.php'>login</a>";
    }
    ?>
</body>
</html>