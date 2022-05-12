<?php
 $r = $_POST['user'];
 $a = $_POST['pass'];
 $e = $_POST['email'];
 if($r =='rakesh' && $a == '123456' && $e == 'rkshpandeyji123@gmail.com')
 {
 session_start();
 $_SESSION['admin']=$r;
 $_SESSION['email']=$e;
 header("Location: r.php"); 
 }
 else{
	$d = "plz enter vaild user id password ";
	header("location:login5.php?d=$d");

 }
 ?>