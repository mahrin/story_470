<?php

$host_name = "localhost";
$db_user = 'root';
$password = '';
$db_name='leave_manage';

// Create connection
$conn = mysqli_connect($host_name,$db_user, $password,$db_name) or die(mysqli_error());

?> 