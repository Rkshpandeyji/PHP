<html>
<body>
<?php
session_start();
if(isset($_SESSION['admin']) && isset($_SESSION['email']))
{
 ?>
 <center><h1>
 
 welcome: <?php echo $_SESSION['admin']; echo "<br>"; ?>
your_email:<U><?php echo $_SESSION['email']; ?></u>
</h1></center>
<a href = "logout.php" >logout </a>
<?php
}
else {
echo "session not start";
}
?>

</body>
</html>