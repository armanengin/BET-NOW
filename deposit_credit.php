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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Signup Page</title>
  </head>
  <body>
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
    </nav>

    <!-- Registration Form !-->
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Deposit with a Debit Card</h3>
            <form action="deposit_card.php" method="post">
              <div class="col">
                <div class="col-md-12 mb-2">

                  <div class="form-outline">
                      <div class="row">
                          <div class="col">
                          <label class="form-label" for="deposit-amount">Deposit Amount: </label>
                          </div>
                          <div class="col">
                          <input type="text" id="deposit-amount" name="deposit-amount" class="form-control form-control-lg" placeholder="TRY" />
                          </div> 
                          </div>
                         </div>
                  </div>
                </div>
                <div class="col-md-12 mb-2">

                  <div class="form-outline">
                      <div class="row">
                          <div class="col">
                          <label class="form-label" for="card-user">Card Holder's Name: </label>
                          </div>
                          <div class="col">
                          <input type="text" id="card-user" name="card-user"class="form-control form-control-lg" />
                          </div>
                      </div>
                  </div>

                </div>
                <div class="col-md-12 mb-2">

                  <div class="form-outline">
                      <div class="row">
                          <div class="col">
                          <label class="form-label" for="card-number">Card Number: </label>
                          </div>
                          <div class="col">
                          <input type="number" id="card-number" name="card-number"class="form-control form-control-lg" />
                          </div>
                      </div>
                  </div>

                </div>
                <div class="col-md-12 mb-2">

                <div class="form-outline">
                    <div class="row">
                        <div class="col">
                        <label class="form-label" for="expire-date">Expire Date: </label>
                        </div>
                        <div class="col">
                        <input type="month"  id="expire-date" name="expire-date"class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>

                </div>
                <div class="col-md-12 mb-2">

                    <div class="form-outline">
                        <div class="row">
                            <div class="col">
                            <label class="form-label" for="card-cvv">CVV: </label>
                            </div>
                            <div class="col">
                            <input type="number" id="card-cvv" name="card-cvv"class="form-control form-control-lg" />
                            </div>
                        </div>
                    </div>

                    </div>
                    
                    <div class="form-outline">
                        <div class="row">
                            <div class="col">
                            <label class="form-label" for="save-card">Save Card</label>
                            </div>
                            <div class="col">
                            <input type="checkbox" id="save-card" name="save-card"class="form-control form-control-lg" />
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="form-outline">
                    <div class="row">
                        <div class="col">
                        <button class="btn btn-primary" name="deposit-card" id="deposit-card" type="submit">Confirm</button>

                        </div>
                    </div>
                    </div>
                 

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

  <style>

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
  </style>
</html>