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
                        <h3>Registration Form TimeZone Online</h3>
                        <p>Fill in the data below</p>
                        <form action="database.php?insert_datatimezone" class="dilarikan-javascript" method="POST" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="id_member" placeholder="Member ID ( Put in number random )" required>
                               <div class="valid-feedback">Member ID</div>
                               <div class="invalid-feedback">Member ID cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="fullname" placeholder="Fullname" required>
                               <div class="valid-feedback">Name is successful and valid !</div>
                               <div class="invalid-feedback">Name cannot be left blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 <div class="valid-feedback">Email valid / successful !</div>
                                 <div class="invalid-feedback">Email cannot be left blank!</div>
                            </div>

                           <div class="col-md-12">
                                <select name="member" class="form-select mt-3" required>
                                      <option selected disabled value="">Choose Member</option>
                                      <option value="VIP">VIP</option>
                                      <option value="EXVIP">EXTRA VIP</option>
                                      <option value="OP">OPERATOR</option>
                                      <option value="NM">NON MEMBER</option>
                               </select>
                                <div class="valid-feedback">Congratulations Member has been selected!</div>
                                <div class="invalid-feedback">Please select a member first!</div>
                           </div>

                           <div class="col-md-12">
                                <select name="lokasi" class="form-select mt-3" required>
                                      <option selected disabled value="">Choose Internet Cafe Location</option>
                                      <option value="Bandung">Bandung ( Mod Esport Bandung )</option>
                                      <option value="Jakarta">Jakarta ( Mod Esport Jakarta )</option>
                                      <option value="Surabaya">Surabaya ( X Gate Esport And Icafe )</option>
                                      <option value="Padang">Padang ( RR Gaming )</option>
                                      <option value="Yogyakarta">Yogyakarta ( Skyland Bhayangkara )</option>
                                      <option value="Depok">Depok ( DZ Game Center )</option>
                                      <option value="Bogor">Bogor (GFORCE Game Center) </option>
                                      <option value="Garut">Garut ( Hadi Net )</option>
                               </select>
                                <div class="valid-feedback">Congratulations Location has been chosen!</div>
                                <div class="invalid-feedback">Please select Location first!</div>
                           </div>



                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <div class="valid-feedback">Password Successfully Filled</div>
                               <div class="invalid-feedback">Password can't be left blank</div>
                           </div>

                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password2" placeholder="Re-type password" required>
                               <div class="valid-feedback">Re-type Password successfully filled</div>
                               <div class="invalid-feedback">Password can't be left blank</div>
                           </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I agree as is if the data above is true</label>
                         <div class="invalid-feedback">Make sure your data is correct</div>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I agree that the selected location is correct and valid</label>
                         <div class="invalid-feedback">Make sure your data is correct</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                <a class="btn btn-primary" href="/login.php">Login Here</a>
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

