<?php
    include("config.php");
    date_default_timezone_set('Europe/Istanbul');
    $date = date('Y-m-d');
    $query = "SELECT match_id, match_date, league FROM match WHERE match_category = football AND match_date = $date";
    $result = mysqli_query($db, $query);

        echo ' <div class="container-fluid" >
        <div class="row">
        <a href="#" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true" id="today-matches">'.$date.'</a>
        </div>';
        while($row=mysqli_fetch_assoc($result)){
            $curr_match_id = $row['match_id'];
            $query = "SELECT match_result_1, match_result_x, match_result_2, two_half_u, two_half_o, handicap_1, handicap_x, handicap_2, mutual_goal, not_mutual_goal, mbn
            FROM match NATURAL JOIN  bet  NATURAL JOIN odd WHERE match_id = $curr_match_id";
            $result_for_odds = mysqli_query($db, $query);
            $row_for_odds = mysqli_fetch_assoc($result_for_odds);

            $query = "SELECT team_name, FROM match NATURAL JOIN  team WHERE match_id = $curr_match_id";
            $result_for_teams = mysqli_query($db, $query);
            $team1 = mysqli_fetch_assoc($result_for_teams);
            $team2 = mysqli_fetch_assoc($result_for_teams);  
         echo '<div class="row" id="outer-row">
                <label for="league-label" style="color:white;">
                    '.$row['league'].'
                </label>
                <div class="col-12">
                    <div class="row" style="background:red;" id="inner-row"> 
                        <div class="col-2">
                            <div class="row" > 
                            <div class="col-4 d-flex justify-content-center">
                                <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin:15px;">
                                &#9734;
                                </a>
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <p style="font-size:15px;">
                                Today: <script> document.write(new Date().toLocaleDateString()); </script>
                                </p> 
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-4 d-flex justify-content-center" >
                            <h6 style="font-size:10px;">
                                mbn:'.$row_for_odds['mbn'].'
                            </h6>
                            </div>
                            <div class="col-8" style="font-size:10px; padding:0;">
                                <h6 style="font-size:10px;" id="home-team">'.$team1.'</h6>
                                <h6 style="font-size:10px;" id="away-team">'.$team2.'</h6>
                            </div>
                            </div>
                        </div>
                        <div class="col-2 ">
                        <div class="row d-flex justify-content-center">
                            Match Result
                        </div>
                        <div class="row" >
                            <div class="col-4">
                            <div class="row" style="margin-left:42.5%">
                                1
                            </div>
                            <div class="row">
                            <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                                '.$row_for_odds['match_result_1'].'
                            </a>
                            </div>
                            </div>

                            <div class="col-4">
                            <div class="row" style="margin-left:42.5%">
                                X
                            </div>
                            <div class="row">
                            <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin-left:1px">
                            '.$row_for_odds['match_result_x'].'
                            </a>
                            </div>
                            </div>

                            <div class="col-4">
                            <div class="row" style="margin-left:42.5%">
                                2
                            </div>
                            <div class="row">
                            <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                            '.$row_for_odds['match_result_2'].'
                            </a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-2">
                            <div class="row d-flex justify-content-center">
                                2.5 under/over
                            </div>
                            <div class="row ">
                            <div class="col-6">
                                <div class="row" style="margin-left:5px;">
                                    2.5 U
                                </div>
                                <div class="row">
                                <a href="#" class="btn btn-dark btn-sm" role="button" style="margin-left:25%;">
                                '.$row_for_odds['two_half_u'].'
                                </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row";>
                                    2.5 O
                                </div>
                                <div class="row">
                                <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                                '.$row_for_odds['two_half_o'].'
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row d-flex justify-content-center">
                                Handicap Result
                            </div>
                            <div class="row" >
                            <div class="col-4">
                                <div class="row" style="margin-left:42.5%">
                                    1
                                </div>
                                <div class="row">
                                <a href="betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                                '.$row_for_odds['handicap_1'].'
                                </a>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="row" style="margin-left:42.5%">
                                    X
                                </div>
                                <div class="row">
                                <a href="betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin-left:1px">
                                '.$row_for_odds['handicap_x'].'
                                </a>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="row" style="margin-left:42.5%">
                                    2
                                </div>
                                <div class="row">
                                <a href="betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                                '.$row_for_odds['handicap_2'].'
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row d-flex justify-content-center">
                                Mutual Goal
                            </div>
                            <div class="row ">
                            <div class="col-6">
                                <div class="row" style="margin-left:18px;">
                                    +
                                </div>
                                <div class="row">
                                <a href="#" class="btn btn-dark btn-sm" role="button" style="margin-left:25%;">
                                '.$row_for_odds['mutual_goal'].'
                                </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row" style="margin-left:5px;">
                                    -
                                </div>
                                <div class="row">
                                <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                                '.$row_for_odds['not_mutual_goal'].'
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" style="border:solid;" >
                        
                    </div>
                </div>
                </div>
            </div>';
        }
    echo '</div>';
?>