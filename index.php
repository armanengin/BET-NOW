<?php
  include("session.php"); 
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
    <a class="navbar-brand" href="index.php">
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
            <a class="nav-link" href="#" style="font-family:Times New Roman;">LIVE <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Football</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Volleyball</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Lottery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Horse Race</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Editors</a>
        </li>
        </ul>
        <div class="login-container" id="login-box" style="display: block;" >
            <form action="login.php" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button class="btn btn-primary btn-sm" type="submit">Login</button>
            <button class="btn btn-primary btn-sm" onclick="location.href='signup.php'" type="button">Signup</button>
            </form>
        </div>
        <div class="user-info" id="user-info" style="display: none;">
          <li>My Account</li>
        </div>
    </nav>


    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingLeague">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseLeague" aria-expanded="true" aria-controls="collapseLeague">
          League
        </button>
      </h5>
    </div>

    <div id="collapseLeague" class="collapse show" aria-labelledby="headingLeague" data-parent="#accordion">
         <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> Turkey </span>
            <b class="badge rounded-pill bg-gray-dark float-end">120</b>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> England </span>
            <b class="badge rounded-pill bg-gray-dark float-end">15</b>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> Spain </span>
            <b class="badge rounded-pill bg-gray-dark float-end">35</b>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> France </span>
            <b class="badge rounded-pill bg-gray-dark float-end">89</b>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="">
            <span class="form-check-label"> Holland </span>
            <b class="badge rounded-pill bg-gray-dark float-end">30</b>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="">
            <span class="form-check-label"> Germany </span>
            <b class="badge rounded-pill bg-gray-dark float-end">30</b>
          </label> <!-- form-check end.// -->
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingMBN">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMBN" aria-expanded="false" aria-controls="collapseMBN">
          MBN
        </button>
      </h5>
    </div>
    <div id="collapseMBN" class="collapse" aria-labelledby="headingMBN" data-parent="#accordion">
        <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> 1 </span>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> 2 </span>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> 3 </span>
          </label> <!-- form-check end.// -->

    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSports">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSports" aria-expanded="false" aria-controls="collapseSports">
          Sports
        </button>
      </h5>
    </div>
    <div id="collapseSports" class="collapse" aria-labelledby="headingSports" data-parent="#accordion">
        <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> Football </span>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> Basketball </span>
          </label> <!-- form-check end.// -->

          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> Volleyball </span>
          </label> <!-- form-check end.// -->
          <label class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" checked="">
            <span class="form-check-label"> Tennis </span>
          </label> <!-- form-check end.// -->
    </div>
  </div>


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
  <a href="/filter.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="width:100%">Apply</a>
  </nav>
  <!-- Sidebar -->
</header>

  <!-- Match Table-->
  <main>
    <div class="container-fluid" style="border:dashed; color:white;">
      <div class="row">
        <a href="#" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true" id="today-matches">Today's Matches</a>
      </div>
      <div class="row" id="outer-row">
        <label for="league-label" style="color:white;">
          Premier League
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
                        mbn:1
                     </h6>
                    </div>
                    <div class="col-8" style="font-size:10px; padding:0;">
                        <h6 style="font-size:10px;" id="home-team">Liverpool</h6>
                        <h6 style="font-size:10px;" id="away-team"> Manchester City</h6>
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
                        0.38
                     </a>
                     </div>
                  </div>

                  <div class="col-4">
                     <div class="row" style="margin-left:42.5%">
                        X
                     </div>
                     <div class="row">
                     <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin-left:1px">
                        1.76
                     </a>
                     </div>
                  </div>

                  <div class="col-4">
                     <div class="row" style="margin-left:42.5%">
                        2
                     </div>
                     <div class="row">
                     <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                        2.00
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
                          1.73
                        </a>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="row";>
                           2.5 O
                        </div>
                        <div class="row">
                        <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           1.55
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
                        <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           0.38
                        </a>
                        </div>
                     </div>

                     <div class="col-4">
                        <div class="row" style="margin-left:42.5%">
                           X
                        </div>
                        <div class="row">
                        <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin-left:1px">
                           1.76
                        </a>
                        </div>
                     </div>

                     <div class="col-4">
                        <div class="row" style="margin-left:42.5%">
                           2
                        </div>
                        <div class="row">
                        <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           2.00
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
                          1.73
                        </a>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="row" style="margin-left:5px;">
                          -
                        </div>
                        <div class="row">
                        <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           1.55
                        </a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-1" style="border:solid;" >
              
          </div>
        </div>
      </div>
    </div>
    </div>







    <div class="container-fluid" style="border:solid; color:yellow;">
      <div class="row">
        <a href="#" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true" id="tomorrow-matches">Tomorrow's Matches</a>
      </div>
      <div class="row" id="outer-row">
        <label for="league-label" style="color:white;">
          Premier League
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
                        mbn:1
                     </h6>
                    </div>
                    <div class="col-8" style="font-size:10px; padding:0;">
                        <h6 style="font-size:10px;" id="home-team">Everton</h6>
                        <h6 style="font-size:10px;" id="away-team"> Chelsea</h6>
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
                        0.38
                     </a>
                     </div>
                  </div>

                  <div class="col-4">
                     <div class="row" style="margin-left:42.5%">
                        X
                     </div>
                     <div class="row">
                     <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin-left:1px">
                        1.76
                     </a>
                     </div>
                  </div>

                  <div class="col-4">
                     <div class="row" style="margin-left:42.5%">
                        2
                     </div>
                     <div class="row">
                     <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                        2.00
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
                          1.73
                        </a>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="row";>
                           2.5 O
                        </div>
                        <div class="row">
                        <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           1.55
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
                        <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           0.38
                        </a>
                        </div>
                     </div>

                     <div class="col-4">
                        <div class="row" style="margin-left:42.5%">
                           X
                        </div>
                        <div class="row">
                        <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true" style="margin-left:1px">
                           1.76
                        </a>
                        </div>
                     </div>

                     <div class="col-4">
                        <div class="row" style="margin-left:42.5%">
                           2
                        </div>
                        <div class="row">
                        <a href="/betslip.php" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           2.00
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
                          1.73
                        </a>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="row" style="margin-left:5px;">
                          -
                        </div>
                        <div class="row">
                        <a href="#" class="btn btn-dark btn-sm" role="button" aria-pressed="true">
                           1.55
                        </a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-2" style="border:solid;" >
              
          </div>
        </div>
      </div>
    
  </main>

</html>
<style>
    body {
      background-color: rgb(47, 43, 123);
    }
@media (min-width: 991.98px) {
  main {
    padding-left: 15%;
    padding-right: 15%;
  }
}

  #outer-row{
    border-style:solid;
    color:white;
  }

  #inner-row{
    border-style:solid;
    border-color:aqua;
  }
  .h-80 {
    height: 80%;
}

.h-20 {
    height: 20%;
}
/* Sidebar */
.sidebar {
  position: fixed;
  top: 8%;
  bottom: 0;
  left: 0;
  padding: 10px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  z-index: 600;
  margin: 0;
}

@media (min-width: 0px) {
  .sidebar {
    width: 15%;
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
</style>


