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

$check_qry="select * from teaching where f_id='$f_id'";
$res1=mysqli_query($conn,$check_qry);
if (mysqli_num_rows($res1) <= 0) {
	$qry="insert into teaching (experience,curr_teaching,subject_taught,expertise,designation,phd_guide,f_id)
	values('$experience','$curr_subject','$sub_taught','$area_expertise','$designation','$phd_guide','$f_id');" or die("fail");
if (mysqli_query($conn,$qry))
	{
   			header("Location:facultyzone.php");
   }
   else {
    echo "record not entered error  ".$f_id;

}
}
else
{
	$qry1="UPDATE teaching set
	experience='$experience',curr_teaching='$curr_subject',
	subject_taught='$sub_taught',expertise='$area_expertise',designation='$designation',
	phd_guide='$phd_guide' where f_id='$f_id'";
	if(mysqli_query($conn,$qry1))
	{
		header("Location:facultyzone.php");
}
else {
echo "record not updated error  ".$f_id;

}
}
?>
