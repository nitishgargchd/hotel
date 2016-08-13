<?php
session_start();
unset($_SESSION['valid_user']);
header("location:Login1.php");
?>