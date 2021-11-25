<?php
session_start();

include "database.php";

$e = $_POST["email"];
$p = md5($_POST["password"]);

$sql = "select * from member where email='$e' and password='$p' limit 1";
$hasil = mysqli_query ($conn,$sql);
$jumlah = mysqli_num_rows($hasil);


    if ($jumlah>0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id_member"]=$row["id_member"];
        $_SESSION["nama"]=$row["nama"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["level"]=$row["level"];

        if ($_SESSION["level"]=$row["level"]==1)
        {
            header("Location:tabeltimezone.php");
        } else if ($_SESSION["level"]=$row["level"]==2)
        {
            header("Location:index.php");
        }else if ($_SESSION["level"]=$row["level"]==3){
            header("Location:index.php");
        }
        
    }else {
        echo "<script> alert('wrong email or password'); </script>";
        echo "<script> location='login.php'</script>";
    }
    

?>
