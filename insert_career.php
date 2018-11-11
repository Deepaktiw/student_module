<?php
session_start();
include ('connection.php');
$f_id=$_SESSION['user1'];
$qualification=$_POST['qualification'];
$name_of_inst=$_POST['name_of_inst'];
$percentage=$_POST['percentage'];
$year=$_POST['year'];
$qry="insert into career (qualification,name_of_inst,percentage,year,f_id)
values('$qualification','$name_of_inst','$percentage','$year','$f_id');" or die("fail");
if (mysqli_query($conn,$qry))
{
      header("Location:facultyzone.php");
 }
 else {
  echo "record not entered error  ".$f_id;

}

 ?>
