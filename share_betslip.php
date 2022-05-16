<?php
     include('config.php');
     session_start();
     $username = $_SESSION['login_user'];
     $sql = "SELECT user_id from user WHERE username = '$username'";
     $result = $db->query($sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $user_id = $row['user_id'];
 
     
    $betslip_arr = $_SESSION['betslip_arr'];
    $no_of_bets = count($betslip_arr);
    $betslip_sql = "INSERT INTO betslip(betslip_date, betslip_time, no_of_bets, user_id, isShared, totalOdd)
         VALUES (curdate(), now(), '$no_of_bets', '$user_id', true, '$odd_value')";
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
        
         $comment_betslip = $_POST['textarea-share-betslip'];
         $share_sql = "INSERT INTO user_shares(user_id, betslip_id, comment, share_date, share_time)
                        VALUES('$user_id', '$betslip_id', '$comment_betslip', curdate(), now())";
        $share_query = mysqli_query($db, $share_sql);
         
        header('location: live.php');
?>