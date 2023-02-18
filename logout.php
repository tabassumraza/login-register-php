<?php
    session_start();
    sesson_unset();
    session_destroy();
    header("location:login.php");
?>