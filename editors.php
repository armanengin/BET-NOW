<?php 
    include('config.php');
    session_start();
    
    $sql = "SELECT editor_id, first_name, last_name, username, num_of_successful_betslip, ratio_of_success, editor_bio FROM editor";
    $editor_sql = mysqli_query($db, $sql);
    $editor_arr = [];
    while($row = mysqli_fetch_assoc($editor_sql)) {
        $editor_arr[] = $row;
    }
?>
<script>
    sessionStorage.setItem('follow_text', 'Follow');
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editors Page</title>
</head>
<body>
<head>
 
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="css/styles.css">
 <title>Login
 </title>
 </head>
 <body>
     
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js%22%3E"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    </body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="live.php">
    <img src="assets/b-n.jpeg" width="30" class="d-inline-block align-top" alt="logo" class="img-fluid">
    <span style="font-family:Times New Roman; color:ForestGreen;">
    Bet-Now
    </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="live.php" style="font-family:Times New Roman;">LIVE <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="football.php">Football</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="volleyball.php">Volleyball</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lottery.php">Lottery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="horce-race.php">Horse Race</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="editors.php">Editors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="social.php">Social</a>
        </li>
        </ul>

        <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:2px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
            </svg>
            <span class="badge badge-light">3</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item"> Remzi liked your post</a>
            <a class="dropdown-item"> Deniz liked your betslip </a>
            <a class="dropdown-item"> Arman liked your comment</a>
        </div>
        </div>
        
        <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="credit-account.php">Wallet</a>
            <a class="dropdown-item" href="friends.php">Friends</a>
            <a class="dropdown-item" href="my-betslips.php">My Betslips</a>
            <a class="dropdown-item" href="my-tickets.php">My Tickets</a>
        </div>
        </div>
        <a class="btn btn-danger" href="logout.php" role="button" style="margin-left:2px;">Logout</a>
        </div>
    </div>
    </nav>
    <!-- Editors -->
    <div class="container" style="border-style:solid; border-color:red; width:70%;">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort By
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Winning Rate (Low To High)</a>
                    <a class="dropdown-item" href="#">Winning Rate (High To Low)</a>
                    <a class="dropdown-item" href="#">Followers (Low To High)</a>
                    <a class="dropdown-item" href="#">Followers(High To Low)</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="container" style="border-style:solid; border-color:red; width:70%;">
        <div class="row" style="border-style:solid; border-color:black;">
            <div class="col-12" style="border-style:solid; border-color:green;">
                <table id="table-editor" class="table  table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Editor</th>
                        <th scope="col">Follower Number</th>
                        <th scope="col">Winning Rate</th>
                        <th style="text-align:center;"scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($editor_sql as $editor){?>
                            <tr>
                                <th scope="row"><?php echo $editor['editor_id'] ?></th>
                                <td><?php echo $editor['first_name']." ".$editor['last_name'] ?></td>
                                <td> </td>
                                <td><?php echo $editor['ratio_of_success']?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="btn-group-editor">
                                        <button type="button" class="btn btn-primary" id="button-editor-profile-<?php echo $editor['editor_id']?>" onClick="profileFunction(<?php echo $editor['editor_id']?>)" >Profile</button>
                                        <button type="button" class="btn btn-warning" id="button-editor-performance-<?php echo $editor['editor_id']?>" onClick="performanceFunction(<?php echo $editor['editor_id']?>)">Performance </button>
                                        <button type="button" class="btn btn-success" id="button-editor-follow-<?php echo $editor['editor_id']?>" onClick="followFunction(<?php echo $editor['editor_id']?>)">
                                            <?php 
                                                if(isset( $_SESSION["editor-profile-follow"])){
                                                    echo  $_SESSION["editor-profile-follow"];
                                                }
                                            ?>
                                        </button>
                                    </div>
                                </td>  
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</html>
<style>
    body{
        background-color:gray;
    }
    .table{
        
        text-align:center;
    }
</style>
<script type="text/javascript">
    function profileFunction(id){
        $.ajax({
                type: "POST",
                url: "editor-profile-ajax.php",
                data: {
                    editor_id: id,
                },
                cache: false,
                success: function(editor_id) {
                    alert(editor_id);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
        });
        window.location.href = "editor-profile.php";
    }

    function performanceFunction(id){
        $.ajax({
                type: "POST",
                url: "editor-performance-ajax.php",
                data: {
                    editor_id: id,
                },
                cache: false,
                success: function(editor_id) {
                    alert(editor_id);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
        });
        window.location.href = "editor-performance.php";
        
    }

    function followFunction(id){
        <?php $_SESSION["editor-profile-follow"] = NULL; ?>
        $.ajax({
                type: "POST",
                url: "editor-follow-ajax.php",
                data: {
                    editor_follow_id: id,
                },
                cache: false,
                success: function(editor_follow_id) {
                    alert(editor_follow_id);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
        });
        window.location.href = "editors.php";
    }
</script>
<style>
    .red{
        background-color:red;
    }
    .green{
        background-color:green;
    }
</style>






