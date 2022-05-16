<?php 
include('config.php');
session_start();
    if( isset($_SESSION['login_flag']) && $_SESSION['login_flag']){
        $username = $_SESSION['login_user'];

        $sql_user = "SELECT admin_id from admin WHERE username = '$username'";
        $result = $db->query($sql_user);
        $row_user = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $admin_id = $row_user['admin_id'];
    }
    else{
        header('location: live.php');
    }

    $odd_sql = "SELECT * from bet";

    $result_odds = mysqli_query($db, $odd_sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="css/styles.css">
 <title>Admin Page </title>
 </head>
 <body>
     
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
     <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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
        <li class="nav-item">
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
    
    <!-- Filter -->
    <div class="container-fluid" style="width:100%; border-style:solid; border-color:red;">
        <div class="row">
            <div class="col-2" style="border-style:solid; border-color:aqua;">
                <h5 style="text-align:center; color:white;">Filter</h5>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" style="width:100%;" id="dropdown-league-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       League
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-league-button">
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-turkey">
                                <label class="form-check-label" for="default-check-turkey">
                                    Turkey
                                </label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-england">
                                <label class="form-check-label" for="default-check-england">
                                    England
                                </label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-spain">
                                <label class="form-check-label" for="defaul-check-spain">
                                   Spain
                                </label>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="dropdown" style="margin-top:2px;">
                    <button class="btn btn-primary dropdown-toggle" type="button" style="width:100%;" id="dropdown-sports-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Sports
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-sports-button">
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-football">
                                <label class="form-check-label" for="default-check-football">
                                    Football
                                </label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-basketball">
                                <label class="form-check-label" for="default-check-basketball">
                                    Basketball
                                </label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-volleyball">
                                <label class="form-check-label" for="defaul-check-volleyball">
                                   Volleyball
                                </label>
                            </div>
                        </a>
                    </div>
                </div>

               <div class="dropdown" style="margin-top:2px;">
                    <button class="btn btn-primary dropdown-toggle" type="button" style="width:100%;" id="dropdown-mbn-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       MBN
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-mbn-button">
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-mbn1">
                                <label class="form-check-label" for="default-check-mbn1">
                                   1
                                </label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-mbn2">
                                <label class="form-check-label" for="default-check-mbn2">
                                    2
                                </label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="default-check-mbn3">
                                <label class="form-check-label" for="defaul-check-mbn3">
                                   3
                                </label>
                            </div>
                        </a>
                    </div>
                    <div class="form-outline datepicker w-100" style="margin-top:2px;">
                            <input
                            style="font-size:16px; text-align:center;"
                            type="date"
                            class="form-control form-control-lg"
                            id="date-index" name="date"
                            />
                    </div>
                    <a href="#" style="width:100%;" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Apply</a>
                </div>
            </div>
            <div class="col-10" style="border-style:solid;">
                    <table class="table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">MBN</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Match</th>
                                <th scope="col">Odd Type</th>
                                <th scope="col">Odd</th>
                                <th scope="col">Options</th>
                            <tr>
                        </thead>
                        <tbody>
                        <?php while($row_odd = mysqli_fetch_assoc($result_odds)){ ?>
                                <?php  if(  $row_odd['odd_value'] != 1){?>
                            <tr>
                                <th scope="row"><?php echo $row_odd['bet_id']?></th>
                                <td><?php echo $row_odd['mbn']?></td>
                                <td><?php echo $row_odd['bet_date']?></td>
                                <td><?php echo $row_odd['bet_time']?></td>
                                <td>
                                <?php 
                                    $match_id = $row_odd['match_id'];
                                    $teams_sql = "SELECT team_name, contains.match_id from team NATURAL JOIN contains, bet WHERE contains.match_id = '$match_id' and bet.match_id = contains.match_id group by team_name";
                                    $teams_query = mysqli_query($db, $teams_sql);
                                    while( $row_teams = mysqli_fetch_assoc($teams_query)){
                                ?>
                             <?php echo $row_teams['team_name'] ?> <br>
                                <?php }?>
                                    </td>
                                <td><?php echo $row_odd['odd_type']?></td>
                                <td><?php echo $row_odd['odd_value']?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="btn-admin-options">
                                        <form action="delete_odd.php" method='post'>
                                            <input type="number" value='<?php echo $row_odd['bet_id']?>' name='delete_odd' style='display:none'>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this odd?')">
                                                Remove
                                            </button>
                                            
                                        </form>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-odd-change-<?php echo $row_odd['bet_id']?>">
                                                Change Odd
                                            </button>
                                            <div class="modal fade" id="modal-odd-change-<?php echo $row_odd['bet_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-odd-change-title-<?php echo $row_odd['bet_id']?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modal-odd-change-long-<?php echo $row_odd['bet_id']?>">Change Odd</h5>
                                                            <button type="button" class="close" data-dismiss="modal-<?php echo $row_odd['bet_id']?>" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="change_odd.php" method='post'>

                                                            <div class="modal-body">
                                                                <h5>Past Bet Odd: <?php echo $row_odd['odd_value'] ?></h5>
                                                                <input type="number" value='<?php echo $row_odd['bet_id']?>' name='change-odd' style='display:none'>
                                                                    <div class="form-group row">
                                                                        <label for="input-new-odd" class="col-4 col-form-label">Enter New Odd</label>
                                                                        <div class="col-8">
                                                                            <input type="number" min="0" step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" class="form-control" name="input-new-odd" placeholder="New Odd">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Change Odd</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                            <?php }?>
                            <?php }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
</html>

<style>
    body{
        background-color:gray;
    }
    .table{
        font-size:16px;
        text-align:center;
    }

    .form-check{
        width:150px;
    }
</style>

