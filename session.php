<?php
include('config.php');
session_start();
$user_check = $_SESSION['login_user'];
$pass_check = $_SESSION['login_pass'];
$query = "select username, password from person where username = '$user_check' and password = '$pass_check'";
$result = $db->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);
$login_session = $row['username'];
$login_pass = $row['password'];
