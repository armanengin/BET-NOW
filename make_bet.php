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

        $betslip_sql = "INSERT INTO betslip(betslip_date, betslip_time, no_of_bets, user_id, isSaved, isPlayed, totalOdd)
        VALUES (curdate(), now(), '$arr_length', '$user_id', true, true, '$odd_value')";
        $betslip_query = mysqli_query($db, $betslip_sql);
    
        $latest_betslip_sql = "SELECT max(betslip_id) as betslip_id from betslip WHERE user_id = '$user_id'";
        $latest_betslip_query = $db->query($latest_betslip_sql);
        $row_latest_betslip = mysqli_fetch_array($latest_betslip_query, MYSQLI_ASSOC);
        $betslip_id = $row_latest_betslip['betslip_id'];
    
    
        for( $i = 0; $i < count($betslip_arr); $i++){
            $bet_id = $betslip_arr[$i];
            $has_sql = "INSERT INTO has(bet_id, betslip_id)
                VALUES ('$bet_id', '$betslip_id')";
            $has_sql_query = mysqli_query($db, $has_sql);
        }
       $transaction_sql = "INSERT INTO transaction(betslip_id, amount_of_cost, transaction_date, transaction_time)
        VALUES ('$betslip_id', '$deposit_val', curdate(), now())";
        $transaction_query = mysqli_query($db, $transaction_sql);
    
        $balance_sql = "UPDATE user 
                        SET balance = balance - '$deposit_val'
                        WHERE user_id = '$user_id'";
        $balance_query = mysqli_query($db, $balance_sql);   

?>