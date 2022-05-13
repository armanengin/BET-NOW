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
    <div class="row" style="margin-right:36px;">
            <div class="col-10 d-flex justify-content-end">
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
    </div>
     <div class="container-fluid" style="border-style:solid; width:60%;">
        <div class="row">
            <div class="col-2">
                <p>@victusmaneo</p>
            </div>
            <div class="col-5">
                <p>(146 followers)</p>
            </div>
            <div class="col-5">
                <p style="float:right;">Shared at : 29 April 2022 - 21.30</p>
            </div>
            <div class="col-12" style="font-size:13px;">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, magni necessitatibus repellendus alias at quod dicta sapiente adipisci nesciunt labore fugiat voluptate quo in deserunt aliquid provident explicabo? Molestias, sapiente.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <div id="accordion">
                    <div class="card"  >
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-lg  btn-block" style="font-size:13px;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            2 match | Odd: 4.80 | Coupon Price: 3 $
                            <span style="float:right;"> 156 people played </span>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
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
                                <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>Liverpool - Manchester City</td>
                                <td>19.30 / 4.29.2022</td>
                                <td>MR1: 1.17 </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>1</td>
                                <td>Everton - Chealsea</td>
                                <td>20.00 / 4.29.2022</td>
                                <td>MG+: 2.50 </td>
                                </tr>
                                <tr>
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <button type="button" style="margin-top:15px;" class="btn btn-primary">Play Betslip</button>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <button type="button" style="margin-top:5px;" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                    </svg>
                    Share
                </button>
                <button type="button" style="margin-top:5px;" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                    Like
                </button>
            </div>
            <div class="col-8 d-flex justify-content-end" style="margin-top:5px;">
                <p>45 Likes - <span data-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" id="comment-link">2 comments </span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="collapse" id="collapseComment">
                    <div class="card card-body">
                        <p style="font-size:13px;" class="card-title">Arman Engin Sucu <span style="float:right;">20.03 - 29/04/2022</span></p>
                        <p style="font-size:13px;" class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo laborum libero perspiciatis animi quibusdam iure quas ex dolore recusandae beatae. Minus, illum quibusdam aut inventore qui magnam aliquam voluptatum numquam?</p>
                    </div>
                    <div class="card card-body">
                        <p style="font-size:13px;" class="card-title">Remzi Tepe <span style="float:right;">20.03 - 29/04/2022</span></p>
                        <p style="font-size:13px;" class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo laborum libero perspiciatis animi quibusdam iure quas ex dolore recusandae beatae. Minus, illum quibusdam aut inventore qui magnam aliquam voluptatum numquam?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="form-group">
                    <label for="Comment">Comment</label>
                    <textarea class="form-control" id="comment-id" rows="2"></textarea>
                </div>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary btn-sm btn-block" style="margin-top:40px;">Apply</button>
            </div>
        </div>
    </div>
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