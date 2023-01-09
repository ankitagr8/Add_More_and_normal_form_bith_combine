<?php 
$con=mysqli_connect("localhost","root","","ajax");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$qry=mysqli_query($con,"insert into user(name,email,password) values('$name','$email','$password')");
$user_id=mysqli_insert_id($con);

$mobile=$_REQUEST['mobile'];
$count=count($mobile);
for($i=0;$i<$count;$i++)
{
	$qry2=mysqli_query($con,"insert into number(user_id,mobile) values('$user_id','$mobile[$i]')");
}
header("location:index2.php");
?>