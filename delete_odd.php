<?php
    include('config.php');
    session_start();

     
   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $deleted_odd = $_POST['delete_odd'];

    $sql = "UPDATE bet SET odd_value = 1 WHERE bet_id = '$deleted_odd'";

    $query = mysqli_query($db, $sql);
   }

   header('location: admin-index.php');
?>