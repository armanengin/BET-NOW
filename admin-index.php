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
            <div class="col-10" style="border-style:solid; border-color:aqua;">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">MBN</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Last Modified</th>
                                <th scope="col">Match</th>
                                <th scope="col">Odd Type</th>
                                <th scope="col">Odd</th>
                                <th scope="col">Options</th>
                            <tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>06/09/2022</td>
                                <td>20.00</td>
                                <td>06/09/2022 - 15.57</td>
                                <td>Liverpool - Mancester City</td>
                                <td>MR1</td>
                                <td>2.7</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="btn-admin-options">
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Remove</a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-odd-change">
                                         Change Odd
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal-odd-change" tabindex="-1" role="dialog" aria-labelledby="modal-odd-change-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-odd-change-long">Change Odd</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Past Bet Odd: 2.7</h5>
                    <form>
                        <div class="form-group row">
                            <label for="input-new-odd" class="col-4 col-form-label">Enter New Odd</label>
                            <div class="col-8">
                                <input type="text" class="form-control" id="input-new-odd" placeholder="New Odd">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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

