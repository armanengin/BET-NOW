<?php
  include('config.php');
  session_start();
  $username = $_SESSION['login_user'];
  $sql = "SELECT first_name, last_name, username, identification_num, birthday, email, phone_num, password from person WHERE username = '$username'";
  $result = $db->query($sql);
  $num_row = $result->num_rows; 

  if( $num_row === 1){
      $row = $result->fetch_assoc();
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $username = $row['username'];
      $identification_num = $row['identification_num'];
      $birthday = $row['birthday'];
      $email = $row['email'];
      $phone_num = $row['phone_num'];
      $password = $row['password'];
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>My Profile</title>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">My Profile</h3>
            <form>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <div class="row">
                    <input type="text" id="firstName" class="form-control form-control-lg" value='<?php echo $first_name ?>'disabled/>
                    <label class="form-label" for="firstName">First Name</label>
                    <button onclick='activate_first_name()'>edit</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" value='<?php echo $last_name ?>' disabled />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="username" class="form-control form-control-lg" value='<?php echo $username ?>' disabled />
                    <label class="form-label" for="username">Username</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="identification-num" class="form-control form-control-lg" value='<?php echo $identification_num ?>' disabled  />
                    <label class="form-label" for="identification-num">TC identification Number</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input
                      type="date"
                      class="form-control form-control-lg"
                      id="birthdayDate" value='<?php echo $birthday ?>' disabled 
                    />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>


              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg"  value='<?php echo $email ?>' disabled />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" value='<?php echo $phone_num ?>' disabled  />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="password" class="form-control form-control-lg"   value='<?php echo $password ?>' disabled   />
                    <label class="form-label" for="password">Password</label>
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