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
<form  method= "post" class="w-50 bg-dark text-light rounded mx-auto mt-5">
    <h1>
        <input type="text" name="username" class="form-control"  placeholder="enter email">
        <input type="password" name="pass" class="form-control" placeholder="enter password">
        <?php 
            session_start();
            include "config.php";
            if (isset($_POST["login"])){
                $username=$_POST["username"];
                $pass=$_POST["pass"];

                $mysql="select * from users where email = '$username' and pasword = '$pass'";
                $result= mysqli_query($conn,$mysql);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result)>0){
                    $_SESSION["u_id"]= $row["id"];
                    $_SESSION["u_name"]=$row["fname"]." ".$row["lname"];
                    header("location:result.php");

                }
                else{
                    echo "<p class='text-danger'>login denied</p>";
                }
            }
        ?>
                <button type="submit" name="login" class="btn btn-info w-50 mx-auto">login</button>

    </form>
</body>
</html>