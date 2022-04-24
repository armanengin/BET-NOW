<?php
session_start();
unset($_SESSION["login_user"]);
unset($_SESSION["login_password"]);
unset($_SESSION["login_flag"]);
header("Location: index.php");
?>