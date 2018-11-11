<?php
session_start();
include("connection.php");
$event_type=$_POST['event_type'];
$activity_type=$_POST['activity_type'];
$event_name=$_POST['event_name'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$duration=$_POST['duration'];
$desc=mysqli_real_escape_string($conn,$_POST['desc']);
$file=$_FILES['image']['tmp_name'];
$image_name= addslashes($_FILES['image']['name']);
$files=$_FILES['image']['name'];
$imagename = str_replace(" ", "_", $image_name);
move_uploaded_file($_FILES["image"]["tmp_name"],"event/" . $imagename);
$f_id=$_SESSION['user1'];
$qry="insert into professional (event_type,activity_type,event_name,venue,date,duration,description,file,f_id)
values('$event_type','$activity_type','$event_name','$venue','$date','$duration','$desc','$imagename','$f_id');" or die("fail");


if (mysqli_query($conn, $qry))
	{
   			header("Location:facultyzone.php");
   }
   else {
    echo "record not entered error  ".$f_id;

}

?>
