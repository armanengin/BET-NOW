<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editors Profile</title>
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
 </body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="/BET-NOW/index.phpindex.php">
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
                <a class="nav-link" href="index.php" style="font-family:Times New Roman;">LIVE <span class="sr-only">(current)</span></a>
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
                        <h5 class="card-title">Remzi Tepe</h5>
                        <p class="card-text">Remzi Tepe is a well-known archeologist who is working in Stealth Startup as a Software Engineer</p>
                        <a href="editor-performance.php" class="btn btn-primary">Performance</a>
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>06/09/2022</td>
                                    <td style="width:100%;">
                                        <p>
                                            <a class="btn btn-success btn-block" style="font-size:12px;" data-toggle="collapse" href="#collapse-winning-betslip" role="button" aria-expanded="false" aria-controls="collapse-winning-betslip">
                                               2 Match | Odd: 4.80 | Coupon Price: 3$ (Income: 15.2$) <span style="float:right;"> 156 played</span>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapse-winning-betslip">
                                            <div class="card card-body">
                                                <table class="table" id="betslip-table">
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
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Win</th>
                                                            <td>1</td>
                                                            <td>06/09/2022</td>
                                                            <td>Liverpool - Manchester City</td>
                                                            <td>MR1</td>
                                                            <td>1.17</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>06/09/2022</td>
                                    <td style="width:100%;">
                                        <p>
                                            <a class="btn btn-danger btn-block" style="font-size:12px;" data-toggle="collapse" href="#collapse-losing-betslip" role="button" aria-expanded="false" aria-controls="collapse-losing-betslip">
                                               2 Match | Odd: 4.80 | Coupon Price: 3$ (Income: 15.2$) <span style="float:right;"> 156 played</span>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapse-losing-betslip">
                                            <div class="card card-body">
                                                <table class="table" id="betslip-table">
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
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Lose</th>
                                                            <td>1</td>
                                                            <td>06/09/2022</td>
                                                            <td>Liverpool - Manchester City</td>
                                                            <td>MR1</td>
                                                            <td>1.17</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>06/09/2022</td>
                                    <td style="width:100%;">
                                        <p>
                                            <a class="btn btn-primary btn-block" style="font-size:12px;" data-toggle="collapse" href="#collapse-daily-betslip" role="button" aria-expanded="false" aria-controls="collapse-daily-betslip">
                                               2 Match | Odd: 4.80 | Coupon Price: 3$ (Income: 15.2$) <span style="float:right;"> 156 played</span>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapse-daily-betslip">
                                            <div class="card card-body">
                                                <table class="table" id="betslip-table">
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
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>NA</th>
                                                            <td>1</td>
                                                            <td>06/09/2022</td>
                                                            <td>Liverpool - Manchester City</td>
                                                            <td>MR1</td>
                                                            <td>1.17</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
</html>
                  
<style>
    body{
        background-color:gray;
    }
    #betslip-table{
        font-size:11px;
        text-align:center;
        margin:0;
        padding:0;
    }
</style>
<script>
    var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
    tabEl.addEventListener('shown.bs.tab', function (event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
    })
</script>