<?php 
include_once 'database.php';

if (isset($_SESSION['email'])) {
    echo "<script> alert('You are already logged in'); </script>";
    echo "<script> location='tabeltimezone.php';</script></a>";
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>TimeZone Online</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="css/style.css">

</head>
<body>
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/index.php">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        <h3>Login Form</h3>
                        <form action="database.php?proses_login" class="dilarikan-javascript" method="POST" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 <div class="valid-feedback">Email Correct</div>
                                 <div class="invalid-feedback">Email can't be left blank</div>
                            </div>


                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <div class="valid-feedback">Password Correct</div>
                               <div class="invalid-feedback">Password can't be left blank</div>
                           </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I agree that the email and password are correct</label>
                         <div class="invalid-feedback">Make sure your data is correct</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="login" type="submit" class="btn btn-primary">Login</button>
                                <a class="btn btn-primary" href="/register.php  ">Register Here</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script  src="js/script.js"></script>

</body>
</html>

