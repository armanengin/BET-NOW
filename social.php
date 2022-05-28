<?php
    include('config.php');
    ini_set('display_errors', 1);
    
    error_reporting(~0);
    session_start();
    $sql = "SELECT betslip_id FROM betslip WHERE isShared = true";
    $betslip_ids = mysqli_query($db, $sql);
?>
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
         <a class="nav-link" href="live.php" style="font-family:Times New Roman;">LIVE </a>
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
     <li class="nav-item active">
         <a class="nav-link" href="social.php">Social <span class="sr-only">(current)</span></a>
     </li>
     </ul>
     <?php
    // do php stuff
        include('my-account.php');
    ?>
    </div>

   </div>
 </nav>
 <main>
    <div class="container-fluid d-flex justify-content-end" style="width:60%; padding:0;">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="old-to-new.php">Old to New</a>
                <a class="dropdown-item" href="new-to-old.php">New to Old</a>
                <a class="dropdown-item" href="most-likes.php">Most Likes</a>
                <a class="dropdown-item" href="most-comments.php">Most Comments</a>
            </div>
        </div>     
    </div>
    <?php while($id = mysqli_fetch_assoc($betslip_ids)){
        $betslip_id = $id['betslip_id'];
        $sql_for_bet_ids = "SELECT bet_id FROM betslip NATURAL JOIN has WHERE betslip.betslip_id = '$betslip_id'";
        $bet_ids = mysqli_query($db, $sql_for_bet_ids);
        $sql_for_name = "SELECT username FROM user_shares NATURAL JOIN user WHERE betslip_id = '$betslip_id'";
        $name = mysqli_query($db, $sql_for_name);
        $sql_for_userShares = "SELECT share_date, share_time, comment FROM user_shares WHERE betslip_id = '$betslip_id'"; 
        $userShares_data = mysqli_query($db, $sql_for_userShares);
    ?>

     <div class="container-fluid" style="border-style:solid; width:60%;">
        <div class="row">
            <div class="col-2"> 
                <p><?php echo mysqli_fetch_assoc($name)['username']; ?></p>
            </div>
            <div class="col-5">
 <!--               <p>(146 followers)</p> -->
            </div>
            <?php $rowForUserShares = mysqli_fetch_assoc($userShares_data) ?>
            <div class="col-5 d-flex justify-content-end">
                <p> Shared at :  <p> <span> <?php echo $rowForUserShares['share_date']?> -> <?php echo $rowForUserShares['share_time']?> <span></p>
            </div>
            <div class="col-12" style="font-size:13px;">
                <p><p><?php echo $rowForUserShares['comment']?></p></p>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <div id="accordion">
                    <div class="card"  >
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <?php
                                $sql_for_totalOdd = "SELECT totalOdd FROM betslip WHERE betslip_id = '$betslip_id'";
                                $totalOdd_query= mysqli_query($db, $sql_for_totalOdd);
                                $totalOdd_assoc = mysqli_fetch_assoc($totalOdd_query);
                                $totalOdd = $totalOdd_assoc['totalOdd'];

                                $sql_for_num_matchs = "SELECT COUNT(match_id) FROM betslip NATURAL JOIN has NATURAL JOIN bet WHERE betslip.betslip_id = '$betslip_id'";
                                $num_matchs_query= mysqli_query($db, $sql_for_num_matchs);
                                $num_matchs_assoc = mysqli_fetch_assoc($num_matchs_query);
                                $num_matchs = $num_matchs_assoc['COUNT(match_id)'];
                            ?> 
                            <button class="btn btn-lg  btn-block" style="font-size:13px;" data-toggle="collapse" data-target="#collapseOne-<?php echo $betslip_id ?>" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $num_matchs ?> match | Odd: <?php echo $totalOdd ?>
                            <span style="float:right;"></span>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseOne-<?php echo $betslip_id ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">MBN</th>
                                <th scope="col">Match</th>
                                <th scope="col">Time/Date </th>
                                <th scope="col">Odd Type / Odd</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $row_num = 1 ?>
                                <?php while($row = mysqli_fetch_assoc($bet_ids)){ 
                                    $bet_id = $row['bet_id'];
                                    $sql_for_bet_infos = "SELECT mbn, bet_date, bet_time, odd_type, odd_value FROM bet WHERE bet_id = '$bet_id'";
                                    $bet_infos = mysqli_query($db, $sql_for_bet_infos);
                                    $sql_for_teams = "SELECT team_name FROM bet NATURAL JOIN contains NATURAL JOIN team WHERE bet_id = '$bet_id'";
                                    $teams = mysqli_query($db, $sql_for_teams);
                                ?>
                                <tr>
                                <th scope="row"><?php echo $row_num?></th>
                                <?php $bet_info = mysqli_fetch_assoc($bet_infos) ?>
                                <td><?php echo $bet_info['mbn']?></td>
                                <td><?php echo mysqli_fetch_assoc($teams)['team_name']?> - <?php echo mysqli_fetch_assoc($teams)['team_name']?></td>
                                <td><?php echo $bet_info['bet_time']?> / <?php echo $bet_info['bet_date']?></td>
                                <td><?php echo $bet_info['odd_type']?>: <?php echo $bet_info['odd_value']?> </td>
                                <?php $row_num++; ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 justify-content-center">
                    <input type="number" style="display:none;", name="betslip_id", value= <?php echo $betslip_id ?> />
                    <button type="button" style="width:100%; margin-top:10%;" class="btn btn-primary" data-toggle="modal" data-target="#modal-betslip-play">Play Betslip</button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-betslip-play" tabindex="-1" role="dialog" aria-labelledby="label-betslip-play" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="label-betslip-play">Play Betslip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                    $sql_for_bet_ids2 = "SELECT bet_id FROM betslip NATURAL JOIN has WHERE betslip.betslip_id = '$betslip_id'";
                                    $bet_ids2 = mysqli_query($db, $sql_for_bet_ids2); 

                                    $sql_for_totalOdd = "SELECT totalOdd FROM betslip WHERE betslip_id = '$betslip_id'";
                                    $totalOdd_query= mysqli_query($db, $sql_for_totalOdd);
                                    $totalOdd_assoc = mysqli_fetch_assoc($totalOdd_query);
                                    $totalOdd = intval($totalOdd_assoc['totalOdd']);
                                ?> 
                                <form action="make_betslip_social.php" method="post"> 
                                    <?php
                                        while($row = mysqli_fetch_assoc($bet_ids2)){
                                            $bet_id = $row['bet_id'];
                                            echo '<input type="hidden" name="betslip_arr[]" value="' .$bet_id. '">';
                                        }
                                    ?>
                                    <input type="number" style="display:none;", name="odd_value", value=<?php echo $totalOdd ?> />
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="label-deposit-amount-social" class="col-6 col-form-label" >Deposit:</label>
                                            <div class="col-6">
                                                <input type="number" class="form-control" name="income_value" id="deposit-amount-social" placeholder="TL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Play Bet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="make" method="post">
                <button type="button" style="margin-top:5px;" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                    </svg>
                    Share
                </button>
                </form>
                
                <button type="button" style="margin-top:5px;" class="btn btn-primary btn-sm" id="button-social-like-<?php echo $betslip_id?>" onClick="likeFunction(<?php echo $betslip_id?>)">
                    <?php
                        $username = $_SESSION['login_user'];
                        $sql = "SELECT user_id from user WHERE username = '$username'";
                        $result = $db->query($sql);
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $user_id = $row['user_id'];
                        $sql_for_isLiked = "SELECT user_id FROM likes WHERE user_id = '$user_id' AND betslip_id = '$betslip_id'";
                        $query_for_isLiked = mysqli_query($db, $sql_for_isLiked);
                        $isLiked = mysqli_num_rows($query_for_isLiked);
                        if($isLiked){
                            echo "Unlike";
                        }else{
                            echo "Like";
                        }
                        ?>
                </button>
            </div>
            <div class="col-8 d-flex justify-content-end" style="margin-top:5px;">
            <?php $sql_for_commenters = "SELECT user_id, comment FROM comments_betslip WHERE betslip_id = '$betslip_id'";
                $commenters = mysqli_query($db, $sql_for_commenters);
                $sql_for_like_num = "SELECT COUNT(user_id) FROM betslip NATURAL JOIN likes WHERE betslip_id = '$betslip_id'";
                $query_for_like_num = mysqli_query($db, $sql_for_like_num);
                $like_num_result = mysqli_fetch_assoc($query_for_like_num);
                $like_num = $like_num_result['COUNT(user_id)'];
            ?>
                <p><?php echo $like_num ?> - <span data-toggle="collapse" href="#collapseComment-<?php echo $betslip_id ?>" role="button" aria-expanded="false" id="comment-link"><?php echo $commenters->num_rows ?> comments </span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="collapse" id="collapseComment-<?php echo $betslip_id ?>">
                <?php
                    while($row = mysqli_fetch_assoc($commenters)){
                        $user_id = $row['user_id'];
                        $sql_for_username = "SELECT username FROM user WHERE user_id = '$user_id'";
                        $username = mysqli_query($db, $sql_for_username);
                ?>
                    <div class="card card-body">
                        <p style="font-size:13px;" class="card-title"><?php echo mysqli_fetch_assoc($username)['username'] ?> <span style="float:right;">20.03 - 29/04/2022</span></p>
                        <p style="font-size:13px;" class="card-text"><?php echo $row['comment'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <form action="make_comment.php" method="post">
            <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="Comment">Comment</label>
                            <input type="text" class="form-control" id="comment-id" name="comment_betslip" rows="2"></input>
                        </div>
                    </div>
                    <div class="col-2 justify-content-center">
                        <input type="number" style="display:none;", name="betslip_id", value= <?php echo $betslip_id ?> />
                        <button type="submit" class="btn btn-primary btn-sm btn-block" style="margin-top:30%;">Apply</button>
                    </div>
            </div>
        </form>
    </div>
    <?php } ?>

<!--------------------------------------------------------------------------------- betslips for editor that followed --------------------------------------------------------------------------------->
    <?php
        $username = $_SESSION['login_user'];
        $sql = "SELECT user_id from user WHERE username = '$username'";
        $result = $db->query($sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $user_id = $row['user_id'];

        $sql_for_betslip_ids_of_editors = "SELECT betslip_id FROM betslip NATURAL JOIN user WHERE user.username IN (SELECT editor.username FROM user NATURAL JOIN follows NATURAL JOIN editor WHERE user.user_id = '$user_id') AND betslip.isShared = true";
        $betslip_ids = mysqli_query($db, $sql_for_betslip_ids_of_editors);
        while($id = mysqli_fetch_assoc($betslip_ids)){
        $betslip_id = $id['betslip_id'];
        $sql_for_bet_ids = "SELECT bet_id FROM betslip NATURAL JOIN has WHERE betslip.betslip_id = '$betslip_id'";
        $bet_ids = mysqli_query($db, $sql_for_bet_ids);
        $sql_for_name = "SELECT username FROM user_shares NATURAL JOIN user WHERE betslip_id = '$betslip_id'";
        $name = mysqli_query($db, $sql_for_name);
        $sql_for_userShares = "SELECT share_date, share_time, comment FROM user_shares WHERE betslip_id = '$betslip_id'"; 
        $userShares_data = mysqli_query($db, $sql_for_userShares);
    ?>

     <div class="container-fluid" style="border-style:solid; width:60%;">
        <div class="row">
            <div class="col-2"> 
                <p><?php echo mysqli_fetch_assoc($name)['username']; ?>(editor)</p>
            </div>
            <div class="col-5">
 <!--               <p>(146 followers)</p> -->
            </div>
            <?php $rowForUserShares = mysqli_fetch_assoc($userShares_data) ?>
            <div class="col-5 d-flex justify-content-end">
                <p> Shared at :  <p> <span> <?php echo $rowForUserShares['share_date']?> -> <?php echo $rowForUserShares['share_time']?> <span></p>
            </div>
            <div class="col-12" style="font-size:13px;">
                <p><p><?php echo $rowForUserShares['comment']?></p></p>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <div id="accordion">
                    <div class="card"  >
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <?php
                                $sql_for_totalOdd = "SELECT totalOdd FROM betslip WHERE betslip_id = '$betslip_id'";
                                $totalOdd_query= mysqli_query($db, $sql_for_totalOdd);
                                $totalOdd_assoc = mysqli_fetch_assoc($totalOdd_query);
                                $totalOdd = $totalOdd_assoc['totalOdd'];

                                $sql_for_num_matchs = "SELECT COUNT(match_id) FROM betslip NATURAL JOIN has NATURAL JOIN bet WHERE betslip.betslip_id = '$betslip_id'";
                                $num_matchs_query= mysqli_query($db, $sql_for_num_matchs);
                                $num_matchs_assoc = mysqli_fetch_assoc($num_matchs_query);
                                $num_matchs = $num_matchs_assoc['COUNT(match_id)'];
                            ?> 
                            <button class="btn btn-lg  btn-block" style="font-size:13px;" data-toggle="collapse" data-target="#collapseOne-<?php echo $betslip_id ?>" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $num_matchs ?> match | Odd: <?php echo $totalOdd ?>
                            <span style="float:right;"></span>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseOne-<?php echo $betslip_id ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">MBN</th>
                                <th scope="col">Match</th>
                                <th scope="col">Time/Date </th>
                                <th scope="col">Odd Type / Odd</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $row_num = 1 ?>
                                <?php while($row = mysqli_fetch_assoc($bet_ids)){ 
                                    $bet_id = $row['bet_id'];
                                    $sql_for_bet_infos = "SELECT mbn, bet_date, bet_time, odd_type, odd_value FROM bet WHERE bet_id = '$bet_id'";
                                    $bet_infos = mysqli_query($db, $sql_for_bet_infos);
                                    $sql_for_teams = "SELECT team_name FROM bet NATURAL JOIN contains NATURAL JOIN team WHERE bet_id = '$bet_id'";
                                    $teams = mysqli_query($db, $sql_for_teams);
                                ?>
                                <tr>
                                <th scope="row"><?php echo $row_num?></th>
                                <?php $bet_info = mysqli_fetch_assoc($bet_infos) ?>
                                <td><?php echo $bet_info['mbn']?></td>
                                <td><?php echo mysqli_fetch_assoc($teams)['team_name']?> - <?php echo mysqli_fetch_assoc($teams)['team_name']?></td>
                                <td><?php echo $bet_info['bet_time']?> / <?php echo $bet_info['bet_date']?></td>
                                <td><?php echo $bet_info['odd_type']?>: <?php echo $bet_info['odd_value']?> </td>
                                <?php $row_num++; ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 justify-content-center">
                    <input type="number" style="display:none;", name="betslip_id", value= <?php echo $betslip_id ?> />
                    <button type="button" style="width:100%; margin-top:10%;" class="btn btn-primary" data-toggle="modal" data-target="#modal-betslip-play">Play Betslip</button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-betslip-play" tabindex="-1" role="dialog" aria-labelledby="label-betslip-play" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="label-betslip-play">Play Betslip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                    $sql_for_bet_ids2 = "SELECT bet_id FROM betslip NATURAL JOIN has WHERE betslip.betslip_id = '$betslip_id'";
                                    $bet_ids2 = mysqli_query($db, $sql_for_bet_ids2); 

                                    $sql_for_totalOdd = "SELECT totalOdd FROM betslip WHERE betslip_id = '$betslip_id'";
                                    $totalOdd_query= mysqli_query($db, $sql_for_totalOdd);
                                    $totalOdd_assoc = mysqli_fetch_assoc($totalOdd_query);
                                    $totalOdd = intval($totalOdd_assoc['totalOdd']);
                                ?> 
                                <form action="make_betslip_social.php" method="post"> 
                                    <?php
                                        while($row = mysqli_fetch_assoc($bet_ids2)){
                                            $bet_id = $row['bet_id'];
                                            echo '<input type="hidden" name="betslip_arr[]" value="' .$bet_id. '">';
                                        }
                                    ?>
                                    <input type="number" style="display:none;", name="odd_value", value=<?php echo $totalOdd ?> />
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="label-deposit-amount-social" class="col-6 col-form-label" >Deposit:</label>
                                            <div class="col-6">
                                                <input type="number" class="form-control" name="income_value" id="deposit-amount-social" placeholder="TL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Play Bet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="make" method="post">
                <button type="button" style="margin-top:5px;" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                    </svg>
                    Share
                </button>
                </form>
                
                <button type="button" style="margin-top:5px;" class="btn btn-primary btn-sm" id="button-social-like-<?php echo $betslip_id?>" onClick="likeFunction(<?php echo $betslip_id?>)">
                    <?php
                        $username = $_SESSION['login_user'];
                        $sql = "SELECT user_id from user WHERE username = '$username'";
                        $result = $db->query($sql);
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $user_id = $row['user_id'];
                        $sql_for_isLiked = "SELECT user_id FROM likes WHERE user_id = '$user_id' AND betslip_id = '$betslip_id'";
                        $query_for_isLiked = mysqli_query($db, $sql_for_isLiked);
                        $isLiked = mysqli_num_rows($query_for_isLiked);
                        if($isLiked){
                            echo "Unlike";
                        }else{
                            echo "Like";
                        }
                        ?>
                </button>
            </div>
            <div class="col-8 d-flex justify-content-end" style="margin-top:5px;">
            <?php $sql_for_commenters = "SELECT user_id, comment FROM comments_betslip WHERE betslip_id = '$betslip_id'";
                $commenters = mysqli_query($db, $sql_for_commenters);
                $sql_for_like_num = "SELECT COUNT(user_id) FROM betslip NATURAL JOIN likes WHERE betslip_id = '$betslip_id'";
                $query_for_like_num = mysqli_query($db, $sql_for_like_num);
                $like_num_result = mysqli_fetch_assoc($query_for_like_num);
                $like_num = $like_num_result['COUNT(user_id)'];
            ?>
                <p><?php echo $like_num ?> - <span data-toggle="collapse" href="#collapseComment-<?php echo $betslip_id ?>" role="button" aria-expanded="false" id="comment-link"><?php echo $commenters->num_rows ?> comments </span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="collapse" id="collapseComment-<?php echo $betslip_id ?>">
                <?php
                    while($row = mysqli_fetch_assoc($commenters)){
                        $user_id = $row['user_id'];
                        $sql_for_username = "SELECT username FROM user WHERE user_id = '$user_id'";
                        $username = mysqli_query($db, $sql_for_username);
                ?>
                    <div class="card card-body">
                        <p style="font-size:13px;" class="card-title"><?php echo mysqli_fetch_assoc($username)['username'] ?> <span style="float:right;">20.03 - 29/04/2022</span></p>
                        <p style="font-size:13px;" class="card-text"><?php echo $row['comment'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <form action="make_comment.php" method="post">
            <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="Comment">Comment</label>
                            <input type="text" class="form-control" id="comment-id" name="comment_betslip" rows="2"></input>
                        </div>
                    </div>
                    <div class="col-2 justify-content-center">
                        <input type="number" style="display:none;", name="betslip_id", value= <?php echo $betslip_id ?> />
                        <button type="submit" class="btn btn-primary btn-sm btn-block" style="margin-top:30%;">Apply</button>
                    </div>
            </div>
        </form>
    </div>
    <?php } ?>

 </main>
</html>

<style>
    body{
        background-color: #ecf0f5;
    }
    .hr{
        border: 1px solid red;
    }
    #comment-link:hover{
        color:white;
    }
    .table{
        font-size:13px;
        text-align:center;
    }
</style>

<script>
function likeFunction(id){
        $.ajax({
                type: "POST",
                url: "social_like_ajax.php",
                data: {
                    betslip_id: id,
                },
                cache: false,
                success: function(betslip_id) {
                    alert(betslip_id);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
        });
        window.location.href = "social.php";
    }
</script>
