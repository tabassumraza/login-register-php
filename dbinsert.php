<?php

    include "config.php";
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $pasword=$_POST['pasword'];

    $mysql="INSERT INTO users (fname,lname,email,city,pasword) VALUES ('$fname','$lname','$email','$city','$pasword')";
    
    if($conn->query($mysql)){
       
            header("location:list.php");
    }
    else{
        echo"some error occured";
    }

    
// for server sql
    // CREATE TABLE users( id int PRIMARY key AUTO_INCREMENT,
    //  fname varchar(50), lname varchar(50), email varchar(50), 
    //  city varchar(50), pasword varchar(50
    
    ?>