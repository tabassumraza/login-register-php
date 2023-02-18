<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include "config.php";
        $id=$_GET['id'];
        $mysql="select * from users where id = '$id'";
        $result = mysqli_query($conn,$mysql);
        $row= mysqli_fetch_assoc($result)
        ?>
    <form  method= "post" class="w-50 bg-dark text-light rounded mx-auto mt-5">
        <h1> edit</h1>
        <input type="text" name="fname" class="form-control" value="<?php echo $row["fname"]?>" placeholder="first name">
        <input type="text" name="lname" class="form-control" value="<?php echo $row["lname"]?>" placeholder="last name">
        <input type="text" name="email" class="form-control" value="<?php echo $row["email"]?>" placeholder=" email">
        <input type="text" name="city" class="form-control" value="<?php echo $row["city"]?>" placeholder="city">
        
        <input type="password" name="pasword" class="form-control" value="<?php echo $row["pasword"]?>" placeholder="password">

        <button type="submit" name="submit" class="btn btn-info w-50 mx-auto">save changes</button>
    
    </form>
    <?php
        if(isset($_POST["submit"])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $city=$_POST['city'];
            $pasword=$_POST['pasword'];
            $mysql1="update users set fname='$fname',lname='$lname',
            email='$email',city='$city',pasword='$pasword' where id='$id'";
            $result1=mysqli_query($conn,$mysql1);
            header("location:list.php");
        }
     ?>
</body>
</html>