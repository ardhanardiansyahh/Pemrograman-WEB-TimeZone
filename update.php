
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
            <?php 
            include 'database.php';
            $mod = new Koneksi();
            echo $id = $_REQUEST['id'];
            $row = $mod->edit($id);
            if (isset($_POST['update'])) {
                if (isset($_POST['id_member']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['member']) && isset($_POST['lokasi']) && isset($_POST['password'])) {
                  if (!empty($_POST['id_member']) && !empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['member'])  && !empty($_POST['lokasi']) && !empty($_POST['password']) ) {
                    
                    $data['id'] = $id;
                    $data['id_member'] = $_POST['id_member'];
                    $data['fullname'] = $_POST['fullname'];
                    $data['member'] = $_POST['member'];
                    $data['lokasi'] = $_POST['lokasi'];
                    $data['email'] = $_POST['email'];
                    $data['password'] = md5($_POST['password']);

                    $update = $mod->update($data);

                    if($update){
                      echo "<script>alert('Data Berhasil Di update');</script>";
                      echo "<script>window.location.href = 'tabeltimezone.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'tabeltimezone.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: update.php?id=$id");
                  }
                }
              }
            ?>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Update Data Member</h3>
                        <p>Isi data dibawah Wajib</p>
                        <form action="" class="dilarikan-javascript" method="POST" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="id_member" placeholder="ID Member ( Random )" value="<?php echo $row['id_member'] ?>" required>
                                <div class="valid-feedback">Id Member</div>
                                <div class="invalid-feedback">ID Member Tidak boleh kosong</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="fullname" placeholder="Nama Lengkap" value="<?php echo $row['nama'] ?>" required>
                                <div class="valid-feedback">Nama berhasil dan valid !</div>
                                <div class="invalid-feedback">Nama tidak boleh dikosongkan!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" value="<?php echo $row['email'] ?>" required>
                                <div class="valid-feedback">Email valid / berhasil !</div>
                                <div class="invalid-feedback">Email tidak boleh dikosongkan!</div>
                            </div>

                            <div class="col-md-12">
                                <select name="member" class="form-select mt-3" value="<?php echo $row['member'] ?>" required>
                                        <option selected disabled value="">Pilih Member</option>
                                        <option value="VIP">VIP</option>
                                        <option value="EXVIP">EXTRA VIP</option>
                                        <option value="OP">OPERATOR</option>
                                        <option value="NM">NON MEMBER</option>
                                </select>
                                <div class="valid-feedback">Selamat Member telah dipilih!</div>
                                <div class="invalid-feedback">Silahkan pilih member terlebih dahulu!</div>
                            </div>


                            
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $row['password'] ?>" required>
                                <div class="valid-feedback">Password Berhasil di isi</div>
                                <div class="invalid-feedback">Password Tidak boleh dikosongkan yah</div>
                            </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label">Saya setuju apa adanya kalau data diatas ini benar</label>
                            <div class="invalid-feedback">Yakinkan data mu benar</div>
                        </div>
                    

                            <div class="form-button mt-3">
                                <button id="submit" name="update" type="submit" class="btn btn-primary">Update</button>
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

