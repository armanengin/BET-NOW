<?php
include("config.php");
session_start();
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    
    $username = $_SESSION['login_user'];
    $sql = "SELECT user_id from user WHERE username = '$username'";
    $result = $db->query($sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $user_id = $row['user_id'];
    $deposit_amount = $_POST["deposit-amount"]; 
    $card_user = $_POST["deposit-card-user"]; 
    $card_number = $_POST["deposit-card-number"];
    $expire_date = $_POST["deposit-expire-date"];
    $card_cvv = $_POST["deposit-card-cvv"];
    if( isset($_POST['deposit-save-card'])){
        $save_card = true;
    }
    else{
        $save_card = false;
    } 
        if( $save_card) {
                
            $sql = "INSERT INTO debit_card ( user_id, card_id,
            card_name, card_expiration_date, card_cvc)  
              VALUES ('$user_id','$card_number','$card_user', '$expire_date', '$card_cvc')";
            $result = $db->query($sql);
            if ($result) {
                $showAlert = true; 
                echo '<script>alert("Saving Card is successful")</script>';
            }
            else{
              echo '<script>alert("Saving Card is unsuccessful")</script>';
            } 
        }
        $sql = "SELECT balance from user where user_id = '$user_id'";
        $result = $db->query($sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if( $row['balance'] === NULL){
            $sql = "UPDATE user SET balance = 0 WHERE user_id = '$user_id'";
            $result = $db->query($sql);
        }
        $sql = "UPDATE user SET balance = balance + '$deposit_amount' WHERE user_id = '$user_id'";
        $result = $db->query($sql);
        if( $result){
            $showAlert = true; 
            echo '<script>alert("Deposit is successful")</script>';
            header("location: profile.php");
        }      
}//end if   
?>