<?php 
include "database.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION["email"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}

$email=$_SESSION["email"];


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<title>Tabel Database</title>
<div class="container">
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            
            <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">TABEL TimeZone</a></h1>
            <br>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="tabeltimezone.php">Tabel Utama</a></li>
                <li><a class="nav-link scrollto" href="database.php?proses_logout">Logout</a></li>
                </ul>
            </nav>

            </div>

            
        </header>
    <br>
    <br>
    <br>
    <br>
    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Member</th>
            <th>Lokasi Warnet</th>
            <th colspan='2'>Action</th>
        </tr>
        </thead>
         <?php 
                                        $membertimezone = $koneksi->select_datatimezoneline();
                                        $no = 1;
                                        ?>
                                        <?php foreach ($membertimezone as $row): ?>
                                            <tr>
                                                <th><?= $no++ ?></th>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['member'] ?></td>
                                                <td><?= $row['lokasi'] ?></td>
                                                <td>
                                                    <a href="lokasiupdate.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Update</a>
							                        <a href="database.php?delete_datamember=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                                                </td>
                                            </tr>
                                    <?php endforeach ?>
    </table>
    <a href="register.php" class="btn btn-primary" role="button">Add More Data</a>

</div>

</body>
</html>