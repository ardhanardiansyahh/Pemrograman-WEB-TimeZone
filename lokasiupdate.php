
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
          <li><a class="nav-link scrollto active" href="/index.html">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <div class="form-body">
        <div class="row">
            <?php 
            include 'database.php';
            $mod2 = new Koneksi();
            echo $id2 = $_REQUEST['id'];
            $row = $mod2->edit2($id2);
            if (isset($_POST['update2'])) {
                if (isset($_POST['fullname']) &&isset($_POST['member']) && isset($_POST['lokasi'] )) {
                  if (!empty($_POST['fullname']) && !empty($_POST['member'])  && !empty($_POST['lokasi'] ) ) {
                    
                    $data['id'] = $id2;
                    $data['fullname'] = $_POST['fullname'];
                    $data['member'] = $_POST['member'];
                    $data['lokasi'] = $_POST['lokasi'];

                    $update = $mod2->update2($data);

                    if($update){
                      echo "<script>alert('Data Berhasil Di update');</script>";
                      echo "<script>window.location.href = 'lokasitabel.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'lokasitabel.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: lokasiupdate.php?id=$id");
                  }
                }
              }
            ?>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Update Data Member Lokasi</h3>
                        <p>Isi data dibawah Wajib</p>
                        <form action="" class="dilarikan-javascript" method="POST" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="fullname" placeholder="Nama Lengkap" value="<?php echo $row['nama'] ?>" required>
                                <div class="valid-feedback">Nama berhasil dan valid !</div>
                                <div class="invalid-feedback">Nama tidak boleh dikosongkan!</div>
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
                                <select name="lokasi" class="form-select mt-3" required>
                                      <option selected disabled value="">Pilih Lokasi Warnet</option>
                                      <option value="Bandung">Bandung ( Mod Esport Bandung )</option>
                                      <option value="Jakarta">Jakarta ( Mod Esport Jakarta )</option>
                                      <option value="Surabaya">Surabaya ( X Gate Esport And Icafe )</option>
                                      <option value="Padang">Padang ( RR Gaming )</option>
                                      <option value="Yogyakarta">Yogyakarta ( Skyland Bhayangkara )</option>
                                      <option value="Depok">Depok ( DZ Game Center )</option>
                                      <option value="Bekasi">Bekasi ( Recca Esport Arena Bekasi ) </option>
                               </select>
                                <div class="valid-feedback">Selamat Lokasi telah dipilih!</div>
                                <div class="invalid-feedback">Silahkan pilih Lokasi terlebih dahulu!</div>
                           </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label">Saya setuju apa adanya kalau data diatas ini benar</label>
                            <div class="invalid-feedback">Yakinkan data mu benar</div>
                        </div>
                    

                            <div class="form-button mt-3">
                                <button id="submit" name="update2" type="submit" class="btn btn-primary">Update</button>
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

