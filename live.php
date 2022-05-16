<?php 
include('config.php');
session_start();
    
    $admin_page_display = 'display:none';

    if( isset($_SESSION['login_flag']) && $_SESSION['login_flag']){
        $username = $_SESSION['login_user'];

        $sql_user = "SELECT user_id from user WHERE username = '$username'";
        $result = $db->query($sql_user);
        $row_user = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $user_id = $row_user['user_id'];
        $balance_sql = "SELECT balance from user WHERE username = '$username'";
        $result = $db->query($balance_sql);
        $row_balance = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $user_balance = $row_balance['balance'];

        $sql_user = "SELECT admin_id from admin WHERE username = '$username'";
        $result = $db->query($sql_user);
        $row_user = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
        if( isset($row_user['admin_id']) && isset($_SESSION['admin_id']) && $_SESSION['admin_id']){
            $admin_id = $row_user['admin_id'];
            if( $admin_id > 0){
                $admin_page_display = 'display:block';
            }
        }
    }
    if( isset($_SESSION['bets'])){
        $bets_query = $_SESSION['bets'];
        $match_ids = [];
        foreach( $bets_query as $bet){
            $match_ids[] = $bet['match_id'];
        }
        $match_ids = implode("','", $match_ids);

        $leagues_sql = "SELECT DISTINCT league from matchs WHERE match_id IN ('".$match_ids."')";
        $leagues = mysqli_query($db, $leagues_sql);

        $sports_sql = "SELECT DISTINCT match_category from matchs WHERE match_id IN ('".$match_ids."')";
        $sports = mysqli_query($db, $sports_sql);

        $match_sql = "SELECT DISTINCT match_id, match_date, match_time, league from matchs WHERE match_id IN ('".$match_ids."')";
        $matchs = mysqli_query($db,$match_sql);

        $contains_sql = "SELECT DISTINCT team_id, match_id from contains WHERE match_id IN ('".$match_ids."')";
        $contains = mysqli_query($db,$contains_sql);
        $contains_arr = [];
        foreach( $contains as $contain){
            $contains_arr[] = $contain['team_id'];
        }
        $contains_arr = implode("','", $contains_arr);
        $team_sql = "SELECT match_id, team_name from team NATURAL JOIN contains WHERE contains.team_id = team.team_id";
        $teams_query = mysqli_query($db,$team_sql);
        $bets = $bets_query;
        $teams = [];
        while($row = mysqli_fetch_assoc($teams_query)) {
            $teams[] = $row;
        }
    }
    else{

        $sql = "SELECT bet_id, match_id, mbn, bet_date, bet_time, category, odd_type, odd_value from bet";
        $match_sql = "SELECT match_id, match_date, match_time, match_category, league, mbn from matchs natural join bet group by matchs.match_id";
        $contains_sql = "SELECT team_id, match_id from contains";
        $team_sql = "SELECT match_id, team_name from team NATURAL JOIN contains WHERE contains.team_id = team.team_id";
        $leagues_sql = "SELECT DISTINCT league from matchs";
        $leagues = mysqli_query($db, $leagues_sql);
        $sports_sql = "SELECT DISTINCT match_category from matchs";
        $sports = mysqli_query($db, $sports_sql);
        $matchs = mysqli_query($db,$match_sql);
        $bets_query = mysqli_query($db,$sql);
        $contains = mysqli_query($db,$contains_sql);
        $teams_query = mysqli_query($db,$team_sql);

        $bets = [];
        while($row = mysqli_fetch_assoc($bets_query)) {
            $bets[] = $row;
        }

        $teams = [];
        while($row = mysqli_fetch_assoc($teams_query)) {
            $teams[] = $row;
        }
    }

    $filter_mbn = [];
    $mbns_sql = "SELECT mbn FROM bet";
    $mbns = mysqli_query($db, $mbns_sql);
    foreach( $mbns as $mbn){
        $filter_mbn[] = $mbn['mbn'];
    }

    $filter_leagues_sql = "SELECT DISTINCT league from matchs";
    $filter_leagues = mysqli_query($db, $filter_leagues_sql);
    $filter_sports_sql = "SELECT DISTINCT match_category from matchs";
    $filter_sports = mysqli_query($db, $filter_sports_sql);
    $betslip = [];
    $odd_arr = [];
    $totalOdd = 1;
    $max_mbn = 1;
    $modals = array('Save', 'Share');

    $betslip_arr = [];
    $odd_value = 1;
    $income_value = 0;
?>
<script>
    var user_balance = <?php echo json_encode($user_balance)?>;
</script>
<!doctype html>
<html lang="en">
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <li class="nav-item active">
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
                    <li class="nav-item">
                        <a class="nav-link" href="editors.php">Editors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="social.php">Social</a>
                    </li>
                    <li class="nav-item" style='<?php echo $admin_page_display ?>' id="admin-page">
                        <a class="nav-link" href="admin-index.php">Admin Page</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" action="login.php" method="post">
                    <?php if (isset($_SESSION['login_flag'])) { 
                        include("my-account.php");    
                    ?>
                    <?php } else { ?>
                        <input type="text" placeholder="Username" name="username" style="margin-right:2px;">
                        <input type="password" placeholder="Password" name="password" style="margin-right:2px;">
                        <button class="btn btn-primary btn-sm" type="submit" style="margin-right:2px;">Login</button >
                        <button class="btn btn-primary btn-sm" onclick="location.href='signup.php'" type="button">Signup</button>
                    <?php } ?>
                </form>
            </div>
        </nav>

      <!-- Filter -->
        <div class="container-fluid" style="width:100%">
            <div class="row">
                <div class="col-2" style="border-style:solid; border-color:aqua; margin:0; padding:0;">
                    <h5 style="text-align:center; color:white;">Filter</h5>
                    <form action="filter_bets.php" method='post'>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" style="width:100%;" id="dropdown-league-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        League
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-league-button">
                            <?php foreach($filter_leagues as $league){?>
                            <a class="dropdown-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="default-league-<?php echo $league['league']?>" name="default-league-<?php echo $league['league']?>">
                                    <label class="form-check-label" for="default-check-turkey">
                                        <?php echo $league['league'] ?>
                                    </label>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="dropdown" style="margin-top:2px;">
                        <button class="btn btn-primary dropdown-toggle" type="button" style="width:100%;" id="dropdown-sports-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sports
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-sports-button">
                        <?php foreach($filter_sports as $sport){?>
                            <a class="dropdown-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""id="default-sports-<?php echo $sport['match_category']?>" name="default-sports-<?php echo $sport['match_category']?>">
                                    <label class="form-check-label" for="default-check-football">
                                    <?php echo $sport['match_category'] ?>
                                    </label>
                                </div>
                            </a>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="dropdown" style="margin-top:2px;">
                        <button class="btn btn-primary dropdown-toggle" type="button" style="width:100%;" id="dropdown-mbn-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MBN
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-mbn-button">
                            <?php  $filter_mbns = array_unique($filter_mbn)?>
                        <?php for($i = 0; $i < count($filter_mbns); $i++){?>
                            <a class="dropdown-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="default-mbn-<?php echo $filter_mbns[$i]?>"name="default-mbn-<?php echo $filter_mbns[$i]?>">
                                    <label class="form-check-label" for="default-check-mbn1">
                                    <?php echo $filter_mbns[$i] ?>

                                    </label>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="form-outline datepicker w-100" style="margin-top:2px;">
                                <input
                                style="font-size:16px; text-align:center;"
                                type="date"
                                class="form-control form-control-lg"
                                id="date-filter" name="date-filter"
                                />
                        </div>
                        <input type="submit"style="width:100%;" class="btn btn-warning btn-lg active" value='Apply'> 
                    </div>
                    </form>

                </div>
                  <!-- Match Table -->
                <div class="col-8" style="border-style:solid;">
                    <table class="table-responsive table-bordered">
                        Today's Matches
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">MBN</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">League</th>
                            <th scope="col">Match</th>
                            <th scope="col">MR1</th>
                            <th scope="col">MRX</th>
                            <th scope="col">MR2</th>
                            <th scope="col">2.5 U</th>
                            <th scope="col">2.5 O</th>
                            <th scope="col">HR1</th>
                            <th scope="col">HRX</th>
                            <th scope="col">HR2</th>
                            <th scope="col">MG+</th>
                            <th scope="col">MG-</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($matchs as $match){?>
                            <tr id="bet-table">
                                <th scope="row"><?php echo $match['match_id'] ?></th>
                                <td><?php echo $match['mbn'] ?></td>
                                <td><?php echo $match['match_date'] ?></td>
                                <td><?php echo $match['match_time'] ?></td>
                                <td><?php echo $match['league'] ?></td>
                                <td>
                                <?php foreach($teams as $team){?>
                                <?php if( $team['match_id'] == $match['match_id']){?>
                                    <?php echo $team['team_name'] ?> <br>
                                    <?php } ?>
                                <?php } ?>
                                </td>
                                <?php for( $i = ($match['match_id'] - 1) * 10; $i < 10 * $match['match_id'] ; $i++){?>
                                <td><button type="button" class="btn btn-secondary btn-sm" id="bet-button-<?php echo $bets[$i]['bet_id']?>"><?php echo $bets[$i]['odd_value'] ?></button></td>
                                <?php }?>
                            </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                </div>
            <!-- Betslip -->
                <div class="col-2" style="border-style:solid; border-color:aqua;">
                    <div class="row d-flex justify-content-center"  style="width:100%;">
                        <label for="my-coupon" style="text-align:center; font-weigth:bold; color:white; font-family: Arial, Helvetica, sans-serif;">
                            My Coupon
                        </label>
                        </div>
                        <hr style="margin:0">
                        <div class="row d-flex justify-content-center">
                            <div class="btn-group" role="group" aria-label="button-group-betslip" >
                                <button type="button btn-sm" class="btn btn-danger btn-sm" style="margin:2px;" id="delete-all-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                    Delete 
                                </button>

                            <button type="button btn-sm" class="btn btn-primary btn-sm" style="margin:2px;" id="share-all-bets">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                                </svg>
                                Share 
                            </button>

                                <button type="button" class="btn btn-success btn-sm" style="margin:2px;" data-toggle="modal" data-target="#modal-Save" id="save-all-bets">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                </svg>
                                    Save 
                                </button>
                            </div>
                        </div>

                        <div class="row" id="row-betslip">
                            
                        </div>
                        <div class="row">
                            <div class="card" style="width:100%; background-color:yellow; margin:3px;">
                                    <div class="section">
                                        <p style="text-align:left;">
                                        <span style="float:right" id="odd-value"> 

                                        <?php echo $totalOdd ?>     
                                        </span>
                                            Total Odd: 
                                        </p>

                                        <hr style="margin:0">
                                        <div class="form-group row">
                                            <label for="deposit-amount-label" class="col-6 col-form-label" >Deposit:</label>
                                            <div class="col-6">
                                                <input type="number" class="form-control" id="deposit-amount"  value="3">
                                            </div>
                                            
                                        </div>

                                        <hr style="margin:0">
                                        <p style="text-align:left;">
                                        <span style="float:right" id="income-value"> 
                                            0 TL
                                        </span>
                                            Total Income: 
                                        </p>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-lg active" role="button" id="make-bet"aria-pressed="true" style="width:100%;  margin:3px;">Make Bet</button>
                            </div>
                        </div>
                </div>
        </div>
        <!-- Modal Betslip (Share Button) -->
        <div class="modal fade" style="width:60%;" id="modal-Share" tabindex="-1" role="dialog" aria-labelledby="label-modal-Share" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="label-modal-betslip">Share Betslip</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                      
                    
                        <table class="table table-dark table-responsive" id="table-share-betslip">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">MBN</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">League</th>
                                <th scope="col">Match</th>
                                <th scope="col">Odd Type</th>
                                <th scope="col">Odd</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($_SESSION['betslip_arr']) && $_SESSION['betslip_arr']){?>
                                <?php $betslip_share_arr = $_SESSION['betslip_arr']?>
                                <?php foreach($betslip_share_arr as $bet_share){?>
                                <tr>
                                        <th scope='row'><?php echo $bets[$bet_share]['bet_id']?></th>
                                        <td><?php echo $bets[$bet_share]['mbn']?></td>
                                        <td><?php echo $bets[$bet_share]['bet_date']?></td>
                                        <td><?php echo $bets[$bet_share]['bet_time']?></td>
                                        <td>
                                         <?php foreach($matchs as $match){?>
                                            <?php if( $match['match_id'] == $bets[$bet_share]['match_id']){?>
                                               <?php echo $match['league']?>
                                            <?php }?>
                                           <?php } ?>
                                        </td>
                                        <td>
                                         <?php foreach($teams as $team){?>
                                            <?php if( $team['match_id'] == $bets[$bet_share]['match_id']){?>
                                               <?php echo $team['team_name']?>
                                                <?php }?>
                                           <?php } ?>
                                        </td>
                                        <td><?php echo $bets[$bet_share]['odd_type']?></td>
                                        <td><?php echo $bets[$bet_share]['odd_value']?></td>
                                </tr>
                                    <?php }?>
                            <?php }?>
                            </tbody>
                               
                                
                                
                        </table>
                    </div>
                    <div class="modal-footer">
                    <?php if(isset($_SESSION['odd_value'])){?>
                        <?php $odd_share = $_SESSION['odd_value']?>
                        <h5>Total Odd: <?php echo $odd_share ?></h5>

                        <?php }?>
                        <form action="share_betslip.php" method="post">
                        <div class="form-group" style="width:100%;">
                            <label for="textarea-share-betslip">You can mention about your betslip</label>
                            <textarea class="form-control" name="textarea-share-betslip" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             
                            <button type="submit" class="btn btn-primary">Share Bet</button>

                        </form>
                    </div>
                </div>
            </div>
         </div>
    </html>
    <?php 
            
    ?> 
    <style>
        .table-responsive{
            text-align:center;
            font-size: 12px;
        }
        body{
            background-color:#8fbc8f;
        }
        .col{
            overflow:auto;
        }
        #bet-table th,td { text-align: center; }
        .selected { background-color:green }
    </style>
   
   <?php 
        $card_betslip_id = 0;
        $button_delete_betslip_id = 0;
   ?>
   
<script>
    var betslip_arr = [];
    var odd_value = 0;
    var income_value = 0;
    var max_mbn = 1;
</script>
<?php for($i = 0; $i < count($bets); $i++){?>
    <script>
        $(document).ready(function() {
                $('#bet-button-<?php echo $bets[$i]['bet_id'] ?>').click(function(e){
                e.preventDefault();
                var temp_arr = [];
                <?php for($j = floor($i / 10) * 10; $j < 10 * (floor($i / 10) + 1); $j++){?>
                    $('#bet-button-<?php echo $bets[$j]['bet_id'] ?>').removeClass("selected");
                    $("#card-betslip-<?php echo $bets[$j]['bet_id'] ?>").remove();

                    temp_arr.push(<?php echo $j ?> + 1);
                
                <?php }?>
                    betslip_arr = betslip_arr.filter(id => !temp_arr.includes(id) );   
                    betslip_arr.push(<?php echo $bets[$i]['bet_id'] ?>);
                <?php $team_compete = [] ?>
                <?php foreach($teams as $team){?>
                     <?php if( $team['match_id'] == floor($i / 10) + 1){?>
                            <?php $team_compete[] = $team['team_name'] ?>
                        <?php } ?>
                <?php } ?>
                $(this).addClass("selected");
                $("#row-betslip").append(`<div class="card" id="card-betslip-<?php echo $bets[$i]['bet_id'] ?>" style="width:100%; background-color:aqua; margin:3px;">
                                <div class="section" style="border-style:solid;">
                                    <p style="text-align:left; padding-bottom:7px; margin:0;">
                                    <span style="float:right"> 
                                                <button type="button" id="button-delete-betslip-<?php echo $bets[$i]['bet_id'] ?>" class="btn btn-warning btn-sm" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                                </button>
                                    </span>
                                        <?php echo $bets[$i]['bet_date']?>
                                    </p>
                                    <hr style="margin:0">
                                    <p style="text-align:left;">
                                    <span style="float:right">1</span>
                                        <?php echo $team_compete[0] ?>
                                    </p>
                                    <p style="text-align:left;">
                                    <span style="float:right">2</span>
                                    <?php echo $team_compete[1] ?>
                                    </p>
                                    <hr style="margin:0">
                                    <p style="text-align:left; margin:0;">
                                    <span style="float:right"> 
                                    <?php echo $bets[$i]['odd_value']?>

                                    </span>
                                    MBN: <?php  echo $bets[$i]['mbn']?>
                                    </p>
                                </div>
                            </div>`);
                $(function() {
                    $("#button-delete-betslip-<?php echo $bets[$i]['bet_id'] ?>").on("click",function(e){
                        $("#card-betslip-<?php echo $bets[$i]['bet_id'] ?>").remove();
                        $('#bet-button-<?php echo $bets[$i]['bet_id'] ?>').removeClass("selected");

                        var bet_id = <?php echo json_encode($bets[$i]['bet_id']); ?>;
                        for( let j = 0; j < betslip_arr; j++){
                            if( bet_id == betslip_arr[j]){
                                betslip_arr.splice(j, 1);
                            }
                        }
                     

                    });
                    
                 
                });

                var bet_arr = <?php echo json_encode($bets); ?>;
                var totalOdd = 1;
                for( let i = 0; i < betslip_arr.length; i++){
                    var temp_id = betslip_arr[i] - 1;
                    totalOdd = totalOdd * bet_arr[temp_id]['odd_value'];
                }
                odd_value = Math.round(totalOdd * 100) / 100;
                 $('#odd-value').html(Math.round(totalOdd * 100) / 100);
                $('#deposit-amount').change(function() {
                    income_value = Math.round(totalOdd* parseInt(document.getElementById('deposit-amount').value)* 100)/100;
                    $('#income-value').html( income_value + " TL");
                });
                income_value = Math.round(totalOdd* parseInt(document.getElementById('deposit-amount').value)* 100)/100;
                    $('#income-value').html( income_value + " TL");
                });
                
            
        });

    </script>

<?php }?>

<script>
    $(document).ready( function(){
        $('#delete-all-button').click( function(e){
            e.preventDefault();
            $('#row-betslip').html('');
            <?php for($j = 0; $j < count($bets); $j++){?>
                    $('#bet-button-<?php echo $bets[$j]['bet_id'] ?>').removeClass("selected");
                    $("#card-betslip-<?php echo $bets[$j]['bet_id'] ?>").remove();
            <?php }?>
            odd_value = 1;
            income_value = 0;
            $('#odd-value').html(1);
            $('#income-value').html(3);

        });

    
    });

</script>

<script type="text/javascript">
    $(document).ready( function(){
        $('#make-bet').click( function(e){
            e.preventDefault();
            var bet_arr = <?php echo json_encode($bets); ?>;
            for( let i = 0; i < bet_arr.length; i++){
               for( let ind = 0; ind < betslip_arr.length; ind++){
                   if( betslip_arr[ind] == bet_arr[i]['bet_id']){
                       if( max_mbn < bet_arr[i]['mbn'] )
                            max_mbn =  bet_arr[i]['mbn'];
                   }
               }
                
            }
            
            if( max_mbn > betslip_arr.length){
                alert("Please satisfy MBN Rules and Add " + (max_mbn - betslip_arr.length) + " bets");
            }
            else if( user_balance >= income_value / odd_value){
            $.ajax({
                type: "POST",
                url: "make_bet.php",
                data: {
                betslip_arr: betslip_arr,
                income_value: income_value,
                odd_value: odd_value,
                },
                cache: false,
                success: function(data) {
                    alert("betslip made");

                },
                error: function(xhr, status, error) {
                console.error(xhr);
                }
                });
            }
            else{
                alert("Please deposit money to your card");
            }
                });
            

             });
</script>

<script>
    $(document).ready( function(){
        $('#share-all-bets').click( function(e){
            e.preventDefault();
            <?php $_SESSION['betslip_arr'] = null ?>
            $.ajax({
                type: "POST",
                url: "betslip_storage.php",
                data: {
                betslip_arr: betslip_arr,
                income_value: income_value,
                odd_value: odd_value,
                },
                cache: false,
                success: function(data) {
                },
                error: function(xhr, status, error) {
                console.error(xhr);
                }
                });
            $('#modal-Share').modal('toggle');
        })
    })
</script>