<?php
session_start();

$_SESSION['id_member']='';
$_SESSION['nama']='';
$_SESSION['email']='';
$_SESSION['level']='';

unset($_SESSION['id_member']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['level']);

session_unset();
session_destroy();
header('Location:login.php');

?>