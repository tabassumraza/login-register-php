<?php
include "config.php";
$id= $_GET['id'];
$mysql="delete from users where id= '$id'";

$result= mysqli_query($conn,$mysql);
if($result){
    header("location:list.php");
}
else {
    echo "error";
}
?>