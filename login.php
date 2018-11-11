<?php
session_start();
include ("connection.php");
$user=filter_input(INPUT_POST,'user');
$pass=filter_input(INPUT_POST,'pass');

if(!empty($user)){
if(!empty($pass)){

$qry=mysqli_query($conn,"select * from new_faculty where f_id='$user' and f_password='$pass'") 
     or die("failed the query");
$row=mysqli_fetch_array($qry);
if($row['f_id']==$user && $row['f_password']==$pass)
{

  $_SESSION["user1"]=$user;
header("Location:facultyzone.php");

}
else
{
//header("Location:index.html");
echo "<script>alert('Login failed');</script>";
}  
}
}

?>
