<?php
session_start();
$con = mysqli_connect('localhost', 'root', '','crimes');
$uname = $_POST['uname'];
$_SESSION['uname']=$_POST['uname'];
$psw = $_POST['psw'];
$sql = "SELECT username from login where username='".$uname."' and password='".$psw."'";
$rs = mysqli_query($con, $sql) or die(mysqli_error($con));
$num=mysqli_num_rows($rs);
if($num==0)
{
 header("Location:login.html");
}    
else{
	$row=mysqli_fetch_array($rs);
	$_SESSION['uname']=$row['username'];
	header("Location:home.html");
}
?>