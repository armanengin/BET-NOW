<?php
include("config.php");
session_start();
$sql = "SELECT bet_id, match_id, mbn, bet_date, bet_time, category, odd_type, odd_value from bet";

$match_sql = "SELECT match_id, match_date, match_time, match_category, league from matchs";
$contains_sql = "SELECT team_id, match_id from contains";
$team_sql = "SELECT team_name, match_id from team NATURAL JOIN contains WHERE contains.team_id = team.team_id";

$leagues_sql = "SELECT DISTINCT league from matchs";
$leagues = mysqli_query($db, $leagues_sql);
$sports_sql = "SELECT DISTINCT match_category from matchs";
$sports = mysqli_query($db, $sports_sql);
$matchs = mysqli_query($db,$match_sql);
$bets_query = mysqli_query($db,$sql);
$contains = mysqli_query($db,$contains_sql);
$teams = mysqli_query($db,$team_sql);
$bets = [];
$mbns = [];


while($row = mysqli_fetch_assoc($bets_query)) {
    $bets[] = $row;
}

foreach( $matchs as $match){
    $mbns[] = array_shift($bets)['mbn'];
    for( $i = 0; $i < 9; $i++){
        array_shift($bets);
    }
}
$bets_query = mysqli_query($db,$sql);
$bets = [];
while($row = mysqli_fetch_assoc($bets_query)) {
    $bets[] = $row;
}

$filter_leagues = [];
$filter_sports = [];
$filter_mbns = [];
$filter_date;
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach( $leagues as $league){
        $name = "default-league-{$league['league']}";
        if( isset($_POST[$name])){
            $filter_leagues[] = $league['league'];
        }
    }
    foreach( $sports as $sport){
        $name = "default-sports-{$sport['match_category']}";
        if( isset($_POST[$name])){
            $filter_sports[] = $sport['match_category'];
        }
    }
    $mbns = array_unique($mbns);
    foreach( $mbns as $mbn){
        $name = "default-mbn-{$mbn}";
        if( isset($_POST[$name])){
            $filter_mbns[] = $mbn;
        }
    }
    $filter_date = $_POST['date-filter'];
    $filter_mbns = implode("','", $filter_mbns);
    $filter_sports = implode("','", $filter_sports);
    $filter_leagues = implode("','", $filter_leagues);
    $bets_sql = "SELECT bet_id, match_id, mbn, bet_date, bet_time, category, odd_type, odd_value, league from bet 
        NATURAL JOIN matchs WHERE mbn IN ('".$filter_mbns."') AND category IN ('".$filter_sports."') AND league IN ('".$filter_leagues."')"  ;
    $bets_query = mysqli_query($db, $bets_sql);
}
$bets = [];
foreach( $bets_query as $bet){
    $bets[] = $bet;
}
$_SESSION['bets'] = $bets;
    header('location: live.php');
    ?>