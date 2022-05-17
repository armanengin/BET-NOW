<?php 
    include('config.php');
    session_start();
    $last_winning_counter = 0;
    $last_losing_counter = 0;
    $current_counter = 0;

    $editor_sql_id = "SELECT editor_id, first_name, last_name, username, num_of_successful_betslip, ratio_of_success, editor_bio FROM editor WHERE editor_id = {$_SESSION["editor-profile"]}";
    $editor_sql_id = mysqli_query($db, $editor_sql_id);
    $editor_id = mysqli_fetch_array($editor_sql_id,MYSQLI_ASSOC);
    $num_editor_sql_id = mysqli_num_rows($editor_sql_id); 
   
    // Select User since editor is a user
    foreach($editor_sql_id as $editor){
        $editor_username = $editor['username'];
    }

    $editor_sql_username = "SELECT user_id FROM user WHERE username = '$editor_username'";
    $editor_sql_username = mysqli_query($db, $editor_sql_username);
    // Select User since editor is a user
    foreach($editor_sql_username as $user){
        $user_id = $user['user_id'];
    }
    

    $editor_sql_winning_betslip = "SELECT betslip_id, betslip_date, name, no_of_bets, user_id, isShared, isSaved, isPlayed, isSuccess_betslip, totalOdd FROM betslip WHERE user_id = '$user_id' and isSuccess_betslip = '1' ";
    $editor_sql_winning_betslip = mysqli_query($db, $editor_sql_winning_betslip);

    $editor_sql_losing_betslip = "SELECT betslip_id, betslip_date, name, no_of_bets, user_id, isShared, isSaved, isPlayed, isSuccess_betslip, totalOdd FROM betslip WHERE user_id = '$user_id' and isSuccess_betslip = '0' ";
    $editor_sql_losing_betslip = mysqli_query($db, $editor_sql_losing_betslip);

    $editor_sql_current_betslip = "SELECT betslip_id, betslip_date, name, no_of_bets, user_id, isShared, isSaved, isPlayed, isSuccess_betslip, totalOdd FROM betslip WHERE user_id = '$user_id' and isSuccess_betslip IS NULL";
    $editor_sql_current_betslip = mysqli_query($db, $editor_sql_current_betslip);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editors Profile</title>
</head>
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
    <!-- Editor Profile-->
    <div class="container" style="border-style:solid; border-color:red; width:70%;">
        <div class="row" style="border-style:solid; border-color:black;">
            <div class="col-3" style="border-style:solid; border-color:aqua;">
                <div class="card" style="width: 13rem;">
                    <img class="card-img-top" src="assets/hacker.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" id="card-editor-name">
                            <?php 
                                foreach($editor_sql_id as $editor){ 
                                    echo $editor['first_name'] . " " .$editor['last_name'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php 
                                foreach($editor_sql_id as $editor){ 
                                    echo $editor['editor_bio'];
                                }
                            ?>
                        </p>
                        <a class="btn btn-primary" id="button-editor-performance" onClick="performanceFunction(<?php echo $editor_id['editor_id']?>)">Performance</a>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" >
                        <a class="nav-link active" style="background-color:green;"  data-toggle="tab" href="#last-winning-bets" role="tab">
                            <span style="color:white"> Last Winning Betslips</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  style="background-color:red;"  data-toggle="tab" href="#last-losing-bets" role="tab">
                            <span style="color:white"> Last Losing Betslips</span>
                        </a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link"  style="background-color:black;"  data-toggle="tab" href="#daily-bets" role="tab">
                            <span style="color:white"> Current Betslips</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" style="border-style:solid; border-color:red;">
                <!-- Last Winning Betslips -->
                    <div id="last-winning-bets" class="tab-pane fade show active" role="tabpanel">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="text-align:center;">Betslip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($editor_sql_winning_betslip as $last_winning_betslip){ ?>
                                    <tr>
                                        <th scope="row"><?php echo ++$last_winning_counter ?></th>
                                        <td><?php echo $last_winning_betslip['betslip_date'] ?></td>
                                        <td style="width:100%;">
                                            <p>
                                                <a class="btn btn-success btn-block" style="font-size:12px;" data-toggle="collapse" href="#collapse-winning-betslip-<?php echo $last_winning_betslip['betslip_id']?>" role="button" aria-expanded="false" aria-controls="collapse-winning-betslip-<?php echo $last_winning_betslip['betslip_id']?>">
                                                <?php echo $last_winning_betslip['no_of_bets'] ?> Match | Odd: <?php echo $last_winning_betslip['totalOdd'] ?> | Coupon Price: 3$ (Income: 15.2$) <span style="float:right;"> 156 played</span>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapse-winning-betslip-<?php echo $last_winning_betslip['betslip_id']?>">
                                                <div class="card card-body">
                                                    <table class="table" id="betslip-winning-table-<?php echo $last_winning_betslip['betslip_id']?>">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Bet Id</th>
                                                                <th scope="col">Win/Lose</th>
                                                                <th scope="col">MBN</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Match</th>
                                                                <th scope="col">Odd Type</th>
                                                                <th scope="col">Odd</th>
                                                            </tr>
                                                        </thead>
                                                        <?php 
                                                             $editor_sql_winning_betslip_bets = "SELECT bet_id, mbn, match_id, bet_date, isSuccess_bet, odd_type, odd_value FROM has NATURAL JOIN betslip NATURAL JOIN bet WHERE betslip_id = '{$last_winning_betslip['betslip_id']}'";
                                                             $editor_sql_winning_betslip_bets = mysqli_query($db, $editor_sql_winning_betslip_bets);
                                                        ?>
                                                        <tbody>
                                                            <?php foreach( $editor_sql_winning_betslip_bets as $last_winning_betslip_bets){ ?>
                                                                <tr>
                                                                    <?php 
                                                                            $last_winning_betslip_bets_matches = "SELECT match_id, match_date, team_name, league FROM team NATURAL JOIN contains NATURAL JOIN matchs WHERE match_id = '{$last_winning_betslip_bets['match_id']}'";
                                                                            $last_winning_betslip_bets_matches = mysqli_query($db, $last_winning_betslip_bets_matches);
                                                                    ?>
                                                                    <th scope="row"><?php echo $last_winning_betslip_bets['bet_id'] ?></th>
                                                                    <td><?php echo $last_winning_betslip_bets['isSuccess_bet'] ?></th>
                                                                    <td><?php echo $last_winning_betslip_bets['mbn'] ?></td>
                                                                    <td>
                                                                        <?php 
                                                                            // Associative array
                                                                            $match = $last_winning_betslip_bets_matches -> fetch_array(MYSQLI_ASSOC);
                                                                            echo $match['match_date'];
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php 
                                                                            foreach($last_winning_betslip_bets_matches as $team){
                                                                                echo $team['team_name']." ";
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $last_winning_betslip_bets['odd_type'] ?></td>
                                                                    <td><?php echo $last_winning_betslip_bets['odd_value'] ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                     <!-- Last Losing Betslips -->
                    <div id="last-losing-bets" class="tab-pane fade" role="tabpanel">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="text-align:center;">Betslip</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($editor_sql_losing_betslip as $last_losing_betslip){ ?>
                                <tr>
                                    <th scope="row"><?php echo ++$last_losing_counter?></th>
                                    <td><?php echo $last_losing_betslip['betslip_date'] ?></td>
                                    <td style="width:100%;">
                                        <p>
                                            <a class="btn btn-danger btn-block" style="font-size:12px;" data-toggle="collapse" href="#collapse-losing-betslip-<?php echo $last_losing_betslip['betslip_id']?>" role="button" aria-expanded="false" aria-controls="collapse-losing-betslip-<?php echo $last_losing_betslip['betslip_id']?>">
                                                <?php echo $last_losing_betslip['no_of_bets'] ?> Match | Odd: <?php echo $last_losing_betslip['totalOdd'] ?> | Coupon Price: 3$ (Income: 15.2$) <span style="float:right;"> 156 played</span>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapse-losing-betslip-<?php echo $last_losing_betslip['betslip_id']?>">
                                            <div class="card card-body">
                                                <table class="table" id="betslip-losing-table-<?php echo $last_losing_betslip['betslip_id']?>">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Bet Id</th>
                                                            <th scope="col">Win/Lose</th>
                                                            <th scope="col">MBN</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Match</th>
                                                            <th scope="col">Odd Type</th>
                                                            <th scope="col">Odd</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                        $editor_sql_losing_betslip_bets = "SELECT bet_id, mbn, match_id, bet_date, isSuccess_bet, odd_type, odd_value FROM has NATURAL JOIN betslip NATURAL JOIN bet WHERE betslip_id = '{$last_losing_betslip['betslip_id']}'";
                                                        $editor_sql_losing_betslip_bets = mysqli_query($db, $editor_sql_losing_betslip_bets);
                                                    ?>
                                                    <tbody>
                                                    <?php foreach( $editor_sql_losing_betslip_bets as $last_losing_betslip_bets){ ?>
                                                            <tr>
                                                                <?php 
                                                                    $last_losing_betslip_bets_matches = "SELECT match_id, match_date, team_name, league FROM team NATURAL JOIN contains NATURAL JOIN matchs WHERE match_id = '{$last_losing_betslip_bets['match_id']}'";
                                                                    $last_losing_betslip_bets_matches = mysqli_query($db, $last_losing_betslip_bets_matches);
                                                                ?>
                                                                <th scope="row"><?php echo $last_losing_betslip_bets['bet_id'] ?></th>
                                                                <td><?php echo $last_losing_betslip_bets['isSuccess_bet'] ?></th>
                                                                <td><?php echo $last_losing_betslip_bets['mbn'] ?></td>
                                                                <td>
                                                                    <?php 
                                                                            // Associative array
                                                                            $match = $last_losing_betslip_bets_matches -> fetch_array(MYSQLI_ASSOC);
                                                                            echo $match['match_date'];
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php 
                                                                        foreach($last_losing_betslip_bets_matches as $team){
                                                                            echo $team['team_name']." ";
                                                                        }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo $last_losing_betslip_bets['odd_type'] ?></td>
                                                                <td><?php echo $last_losing_betslip_bets['odd_value'] ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                     <!-- Daily Betslips -->
                     <div id="daily-bets" class="tab-pane fade" role="tabpanel">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="text-align:center;">Betslip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($editor_sql_current_betslip as $current_betslip){ ?>
                                    <tr>
                                        <th scope="row"><?php echo ++$current_counter?></th>
                                        <td><?php echo $current_betslip['betslip_date'] ?></td>
                                        <td style="width:100%;">
                                            <p>
                                                <a class="btn btn-primary btn-block" style="font-size:12px;" data-toggle="collapse" href="#collapse-daily-betslip-<?php echo $current_betslip['betslip_id']?>" role="button" aria-expanded="false" aria-controls="collapse-daily-betslip-<?php echo $current_betslip['betslip_id']?>">
                                                    <?php echo $current_betslip['no_of_bets'] ?> Match | Odd: <?php echo $current_betslip['totalOdd'] ?> | Coupon Price: 3$ (Income: 15.2$) <span style="float:right;"> 156 played</span>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapse-daily-betslip-<?php echo $current_betslip['betslip_id']?>">
                                                <div class="card card-body">
                                                    <table class="table" id="betslip-current-table-<?php echo $current_betslip['betslip_id']?>">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Win/Lose</th>
                                                                <th scope="col">MBN</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Match</th>
                                                                <th scope="col">Odd Type</th>
                                                                <th scope="col">Odd</th>
                                                            </tr>
                                                        </thead>
                                                        <?php 
                                                            $editor_sql_current_betslip_bets = "SELECT bet_id, mbn, match_id, bet_date, isSuccess_bet, odd_type, odd_value FROM has NATURAL JOIN betslip NATURAL JOIN bet WHERE betslip_id = '{$current_betslip['betslip_id']}'";
                                                            $editor_sql_current_betslip_bets = mysqli_query($db, $editor_sql_current_betslip_bets);
                                                        ?>
                                                        <tbody>
                                                            <?php foreach( $editor_sql_current_betslip_bets as $current_betslip_bets){ ?>
                                                                <tr>
                                                                    <?php 
                                                                        $current_betslip_bets_matches = "SELECT match_id, match_date, team_name, league FROM team NATURAL JOIN contains NATURAL JOIN matchs WHERE match_id = '{$current_betslip_bets['match_id']}'";
                                                                        $current_betslip_bets_matches = mysqli_query($db, $current_betslip_bets_matches);
                                                                    ?>
                                                                    <th scope="row"><?php echo $current_betslip_bets['bet_id'] ?></th>
                                                                    <td><?php echo $current_betslip_bets['isSuccess_bet'] ?></th>
                                                                    <td><?php echo $current_betslip_bets['mbn'] ?></td>
                                                                    <td>
                                                                        <?php 
                                                                                // Associative array
                                                                                $match = $current_betslip_bets_matches -> fetch_array(MYSQLI_ASSOC);
                                                                                echo $match['match_date'];
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php 
                                                                            foreach($current_betslip_bets_matches as $team){
                                                                                echo $team['team_name']." ";
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $current_betslip_bets['odd_type'] ?></td>
                                                                    <td><?php echo $current_betslip_bets['odd_value'] ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
    </body>

    <style>
    body {background-color: gray;}
    .table{
        font-size:13px;
        text-align:center;
        margin:0;
        padding:0;
    }
    </style>

</html>
<script>
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
</script>
                  
