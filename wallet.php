<?php
    include('config.php');
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
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Wallet Page</title>
  </head>
  <body>
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
    </nav>

    <!-- Registration Form !-->
    <section class="vh-100 gradient-custom">
    <div class="container h-100">
        <div class="row" style="margin-top: 5%;">
            <div class="col-6 d-flex justify-content-center">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Deposit with a Debit Card</h3>
                        <form action="deposit_card.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="deposit-amount">Deposit Amount: </label>
                                </div>
                                <div class="col">
                                    <input type="text" id="deposit-amount" name="deposit-amount" class="form-control form-control-lg" placeholder="TRY" required/> 
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="card-user">Card Holder's Name: </label>
                                </div>
                                <div class="col">
                                    <input type="text" id="deposit-card-user" name="card-user"class="form-control form-control-lg" required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="card-number">Card Number: </label>
                                </div>
                                <div class="col">
                                    <input type="number" id="deposit-card-number" name="card-number"class="form-control form-control-lg" required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="expire-date">Expire Date: </label>
                                </div>
                                <div class="col">
                                    <input type="month"  id="deposit-expire-date" name="expire-date"class="form-control form-control-lg" required/>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="card-cvv">CVV: </label>
                                </div>
                                <div class="col">
                                    <input type="number" id="deposit-card-cvv" name="card-cvv"class="form-control form-control-lg"required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="save-card">Save Card</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" id="deposit-save-card" name="save-card"class="form-control form-control-lg"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                <button class="btn btn-primary" name="deposit-card" id="deposit-card" type="submit">Confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Withdraw with a Debit Card</h3>
                        <form action="withdraw_card.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="withdraw-amount">Withdraw Amount: </label>
                                </div>
                                <div class="col">
                                    <input type="text" id="withdraw-amount" name="withdraw-amount" class="form-control form-control-lg" placeholder="TRY" /> 
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="card-user">Card Holder's Name: </label>
                                </div>
                                <div class="col">
                                    <input type="text" id="withdraw-card-user" name="card-user"class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="card-number">Card Number: </label>
                                </div>
                                <div class="col">
                                    <input type="number" id="withdraw-card-number" name="card-number"class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="expire-date">Expire Date: </label>
                                </div>
                                <div class="col">
                                    <input type="month"  id="withdraw-expire-date" name="expire-date"class="form-control form-control-lg" />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="card-cvv">CVV: </label>
                                </div>
                                <div class="col">
                                    <input type="number" id="withdraw-card-cvv" name="card-cvv"class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label class="form-label" for="save-card">Save Card</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" id="withdraw-save-card" name="save-card"class="form-control form-control-lg" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                <button class="btn btn-primary" name="withdraw-card" id="withdraw-deposit-card" type="submit">Confirm</button>
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