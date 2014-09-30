<?php
session_start();
include 'config/koneksi.php';
$pass=md5($_POST['password']);
$query=mysql_query("SELECT * FROM admin WHERE username_admin='$_POST[username]' AND password_admin='$pass'");
$q=mysql_num_rows($query);
if ($q==0){
	header("location:login.php");
}elseif($q==1){
	$_SESSION['login']=1;
	header("location:index.php");
	}
?>