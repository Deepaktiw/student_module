<?php
session_start();
include("connection.php");
$experience=mysqli_real_escape_string($conn,$_POST['experience']);
$curr_subject=$_POST['curr_subject'];
$sub_taught=$_POST['sub_taught'];
$area_expertise=$_POST['area_expertise'];
$designation=$_POST['designation'];
$phd_guide=mysqli_real_escape_string($conn,$_POST['phd_guide']);
$f_id=$_SESSION['user1'];
$qry1="UPDATE research
experience='$experience',curr_teaching='$curr_subject',
subject_taught='$sub_taught',expertise='$area_expertise',designation='$designation',
phd_guide='$phd_guide' where f_id='$f_id'";
if (mysqli_query($conn, $qry1))
{
      header("Location:facultyzone.php");
      break;
}
else {
  echo "record not entered error  ".$f_id;
      }
?>
