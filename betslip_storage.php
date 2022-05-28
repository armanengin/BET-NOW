<?php
    include('config.php');
    session_start();
    $username = $_SESSION['login_user'];
    $sql = "SELECT user_id from user WHERE username = '$username'";
    $result = $db->query($sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $user_id = $row['user_id'];

    
    $betslip_arr = ($_POST['betslip_arr']);
    $odd_value = $_POST['odd_value'];
    $income_value = $_POST['income_value'];
    $arr_length = count($betslip_arr);
    $deposit_val = $income_value / $odd_value;


  
    $_SESSION['betslip_arr'] = $betslip_arr;
    $_SESSION['odd_value'] = $odd_value;
    $_SESSION['income_value'] = $income_value;


?>