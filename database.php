<?php 
/**
 * 
 */
class Koneksi
{		
		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "member_timezone";
		private $conn;
	
		public function __construct(){
			if(!isset($_SESSION)) 
			{ 
				session_start(); 
			} 
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

	public function select_datatimezoneline()
	{
		$sql = "SELECT * FROM member";
		return $this->conn->query($sql);
	}

	public function insert_datatimezone()
	{
		$username=$_POST["id_member"];
		$nama=$_POST["fullname"];
		$member=$_POST["member"];
		$email=$_POST["email"];
		$level=$_POST["level"];
		$lokasi=$_POST["lokasi"];
		$password=md5($_POST["password"]);
        $sql = "INSERT INTO `member`(`id_member`, `nama`, `member`, `lokasi`, `email`, `level`, `password`) VALUES ('$username','$nama','$member','$lokasi','$email','$level','$password')";
        $this->conn->query($sql);
        header('location: login.php');
	}


	public function delete_datamember($id = null)
	{
		$sql = "DELETE FROM `member` WHERE id = $id";
		
		$this->conn->query($sql);
		header("location: tabeltimezone.php");
	}

	public function proses_login()
	{
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$sql = "SELECT * FROM member WHERE email= '$email' AND password = '$password'";
		$result = $this->conn->query($sql);

		if ($result->fetch_assoc() > 0) {
			$_SESSION['email'] = $email;
			header("location: tabeltimezone.php");
		} else {
			echo "<script> alert('Email atau Password Salah');</script>";
			echo "<script> location= 'login.php'; </script>";
		}
	}

	public function proses_registrasi()
	{
		$email = $_POST['email'];
		$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
		$result = $this->conn->query($sql);

		if ($result->fetch_assoc() > 0) {
			$_SESSION['nama'] = $username;
			header("location: tabeltimezone.php");
		} else {
			echo "<script> alert('Username atau Password Salah');</script>";
			echo "<script> location= 'login.php'; </script>";
		}
	}

	public function proses_logout()
	{
		session_destroy();
		echo "<script> alert('Berhasil Logout');</script>";
		echo "<script> location= 'login.php'; </script>";
	}
	
	public function edit($id){

		$data = null;

		$query = "SELECT * FROM member WHERE id = '$id'";
		if ($sql = $this->conn->query($query)) {
			while($row = $sql->fetch_assoc()){
				$data = $row;
			}
		}
		return $data;
	}

	public function update($data){

		$query = "UPDATE member SET id_member='$data[id_member]', nama='$data[fullname]', email='$data[email]', member='$data[member]', lokasi='$data[lokasi]', password='$data[password]' WHERE id='$data[id] '";

		if ($sql = $this->conn->query($query)) {
			return true;
		}else{
			return false;
		}
	}

	public function edit2($id){

		$data = null;

		$query = "SELECT * FROM member WHERE id = '$id'";
		if ($sql = $this->conn->query($query)) {
			while($row = $sql->fetch_assoc()){
				$data = $row;
			}
		}
		return $data;
	}

	public function update2($data){

		$query = "UPDATE member SET nama='$data[fullname]', member='$data[member]', lokasi='$data[lokasi]' WHERE id='$data[id] '";

		if ($sql = $this->conn->query($query)) {
			return true;
		}else{
			return false;
		}
	}
}
$koneksi = new Koneksi();

if (isset($_GET['delete_datamember'])) {
	$koneksi->delete_datamember($_GET['delete_datamember']);
}
if (isset($_GET['insert_datatimezone'])) {
	$koneksi->insert_datatimezone();
}
if (isset($_GET['updateGetEdit'])) {
	$koneksi->updateGetEdit();
}
if (isset($_GET['proses_login'])) {
	$koneksi->proses_login();
}
if (isset($_GET['proses_logout'])) {
	$koneksi->proses_logout();
}
 ?>