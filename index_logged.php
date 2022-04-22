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
        <div class="user-info" id="user-info">
          <li>My Account</li>
        </div>
    </nav>


    !--Main Navigation-->
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
    <div id="collapseDate" class="collapse" aria-labelledby="headingDate" data-parent="#accordion">

        <div class="card-body">
        <input type="date" id="date_id" name="date_name"
        value="2018-07-22"
        min="2018-01-01" max="2018-12-31">
        </div>
    </div>
    <a href="/filter.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Apply</a>
    </div>
  </nav>
  <!-- Sidebar -->
</header>

</html>
<style>
    body {
      background-color: rgb(47, 43, 123);
    }
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 54px;
  bottom: 0;
  left: 0;
  padding: 30px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
  margin: 0;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
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


