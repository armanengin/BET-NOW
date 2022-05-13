<?php 
 session_start();
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
  <body>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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
                </ul>

                <form class="form-inline my-2 my-lg-0" action="login.php" method="post">
                    <?php if ($_SESSION['login_flag'] == true) { 
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
                        <a href="#" style="width:100%;" class="btn btn-warning btn-lg active" role="button">Apply</a>
                    </div>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>2</td>
                                <td>16/09/2022</td>
                                <td>20.00</td>
                                <td>Premier League</td>
                                <td>Liverpool - Manchester City</td>
                                <td><button type="button" class="btn btn-secondary btn-sm">1.5</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">2.5</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">2.45</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">1.7</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">2.4</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">3.2</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">1.7</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">2.4</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">3.2</button></td>
                                <td><button type="button" class="btn btn-secondary btn-sm">2.5</button></td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
            <!-- Betslip -->
                <div class="col-2" style="border-style:solid; border-color:aqua;">
                    <div class="row d-flex justify-content-center"  style="width:100%;">
                        <label for="my-coupon" style="position:relative; font-weigth:bold; color:white; font-family: Arial, Helvetica, sans-serif;">
                            My Coupon
                        </label>
                        </div>
                        <hr style="margin:0">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                            <button type="button" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                Delete 
                            </button>
                            </div>
                            <div class="col-6 d-flex justify-content-center" >
                            <button type="button" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                            </svg>
                                Save 
                            </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card" style="width:100%; background-color:aqua; margin:3px;">
                                <div class="section" style="border-style:solid;">
                                    <p style="text-align:left; padding-bottom:7px; margin:0;">
                                    <span style="float:right"> 
                                                <button type="button" class="btn btn-warning btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                    </span>
                                    <script> document.write(new Date().toLocaleDateString()); </script>
                                    </p>
                                    <hr style="margin:0">
                                    <p style="text-align:left;">
                                    <span style="float:right">1</span>
                                        Home Team
                                    </p>
                                    <p style="text-align:left;">
                                    <span style="float:right">2</span>
                                        Away Team
                                    </p>
                                    <hr style="margin:0">
                                    <p style="text-align:left; margin:0;">
                                    <span style="float:right"> 
                                    Match Result: 1.17
                                    </span>
                                    MBN: 1
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="width:100%; background-color:aqua; margin:3px;">
                                <div class="section" style="border-style:solid;">
                                    <p style="text-align:left; padding-bottom:7px; margin:0;">
                                    <span style="float:right"> 
                                                <button type="button" class="btn btn-warning btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                    </span>
                                    <script> document.write(new Date().toLocaleDateString()); </script>
                                    </p>
                                    <hr style="margin:0">
                                    <p style="text-align:left;">
                                    <span style="float:right">1</span>
                                        Home Team
                                    </p>
                                    <p style="text-align:left;">
                                    <span style="float:right">2</span>
                                        Away Team
                                    </p>
                                    <hr style="margin:0">
                                    <p style="text-align:left; margin:0;">
                                    <span style="float:right"> 
                                    Match Result: 1.17
                                    </span>
                                    MBN: 1
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="width:100%; background-color:yellow; margin:3px;">
                                <div class="section">
                                    <p style="text-align:left;">
                                    <span style="float:right"> 
                                        4.17
                                    </span>
                                    Total Odd: 
                                    </p>

                                    <hr style="margin:0">

                                    <div class="form-group row">
                                    <label for="deposit-amount-label" class="col-6 col-form-label">Deposit:</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="id-deposit-amount" placeholder="TL">
                                    </div>
                                    </div>

                                    <hr style="margin:0">

                                    <p style="text-align:left;">
                                    <span style="float:right"> 
                                    150 TL
                                    </span>
                                    Total Income: 
                                    </p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true" style="width:100%;  margin:3px;">Make Bet</a>
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
        }
        body{
            background-color:#8fbc8f;
        }
        .col{
            overflow:auto;
        }
    </style>