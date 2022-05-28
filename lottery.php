<?php
    include('config.php');
    session_start();
        if( isset($_SESSION['login_flag'])){
            $username = $_SESSION['login_user'];
    
            $sql_user = "SELECT user_id from user WHERE username = '$username'";
            $result = $db->query($sql_user);
            $row_user = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $user_id = $row_user['user_id'];
            $balance_sql = "SELECT balance from user WHERE username = '$username'";
            $result = $db->query($balance_sql);
            $row_balance = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $user_balance = $row_balance['balance'];
        }
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
        <li class="nav-item">
            <a class="nav-link" href="live.php" style="font-family:Times New Roman;">LIVE <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="football.php">Football</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="volleyball.php">Volleyball</a>
        </li>
        <li class="nav-item active">
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
    

    <!-- SideBar -->
    <header>
        
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
        <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingDate">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseDate" aria-expanded="false" aria-controls="collapseDate">
                Date
                </button>
            </h5>
            </div>
            <div id="collapseDate" class="collapse" aria-labelledby="headingDtate" data-parent="#accordion">
            <div class="form-outline datepicker w-100">
                            <input
                            type="date"
                            class="form-control form-control-lg"
                            id="date-index" name="date"
                            />
            </div>
            <div>
            </div>
    
        </div>
        </div>
        </nav>
    </header>


    <!-- Lottery Table-->
    <main>
        <div class="container-fluid" style="border-style:solid; border-color:aqua;">
            <div class="row mx-auto">
                <a href="#" class="btn btn-success btn-lg btn-block" style="" role="button" aria-pressed="true" id="today-matches">Today's Lottery Tickets</a>
            </div>
            
            <div class="row" style="margin-top:5px;">
                <div class="col-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align:center;">Ticket Number</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">51439</h5>
                        <p class="card-text" style="text-align:center;">5$</p>
                    </div>
                    </div>
                </div>
                
            </div>



            <div class="row" style="margin-top:5px;">
                <div class="col-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align:center;">Ticket Number</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">51439</h5>
                        <p class="card-text" style="text-align:center;">5$</p>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>    
    </main>

    <!--Ticket Slip-->
    <header id="ticketslip-header">
        <div class="container-fluid bg-dark">
            <div class="row d-flex justify-content-center" style="width:100% border-style=solid; border-color:white;">
                <label for="my-ticket-coupon" style="position:relative; font-weigth:bold; color:white; font-family: Arial, Helvetica, sans-serif;">
                    My Ticket Coupon
                </label>
            </div>
           
            <div class="row mx-auto" style="border-style:solid; border-color:red;">
                <div class="col-6">
                    <button type="button" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        Delete 
                    </button>
                </div>
            
                <div class="col-6" >
                    <button type="button" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                    </svg>
                        Save 
                    </button>
                </div>
            </div>
            <hr style="margin:0">
           <div class="row mx-auto" style="border-style:solid; border-color:red; width:100%;">
                <div class="card text-white bg-danger" style="width: 100%;">
                    <div class="card-header mx-auto" >
                    Ticket Number
                        <button type="button" class="btn btn-warning" style="width:40px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">51439</h5>
                        <p class="card-text" style="text-align:center;">5$</p>
                    </div>
                    </div>
                </div>
           </div>
           <div class="row mx-auto" style="border-style:solid; border-color:red; width:100%;">
                <div class="card text-white bg-danger" style="width: 100%;">
                    <div class="card-header mx-auto" >
                    Ticket Number
                        <button type="button" class="btn btn-warning" style="width:40px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">51439</h5>
                        <p class="card-text" style="text-align:center;">5$</p>
                    </div>
                    </div>
                </div>
           </div>

           <div class="row mx-auto" style="border-style:solid; border-color:red; width:100%;">
           <div class="card" style="width:100%; background-color:yellow; margin:3px;">
          <div class="section">
            <p style="text-align:left;">
              <span style="float:right"> 
               10$
              </span>
              Total Price: 
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
        <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true" style="width:100%;  margin:3px;">Play Ticket</a> 
        </div>
    </header>
</html>
<style>

    /* Sidebar */
.sidebar {
  position: absolute;
  top: 8%;
  bottom: 0;
  left: 0;
  padding: 10px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  z-index: 600;
  margin: 0;
}

@media (min-width: 991.98px) {
      main {
        position:absolute;
        width:100%;
        padding-left: 16%;
        padding-right: 16%;
      }
    }

@media (min-width: 998px) {
  .sidebar {
    width: 15%;
    height:100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);

}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

#ticketslip-header{
      position:absolute;
      border-style: solid;
      border-color:#F08080;
      margin-left: 85%;
      width:15%;
      height:100%;
    }
    .container-fluid,
.collapse {
  margin: 0px auto;
  padding: 0px;
}
</style>