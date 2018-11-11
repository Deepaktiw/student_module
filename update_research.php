<?php
session_start();
include("connection.php");
$update=$_POST['r_id'];
$f_id=$_SESSION['user1'];
$file=$_FILES['researchfile']['tmp_name'];
$pgno=$_POST['pgno'];
$author=$_POST['author'];
$title=$_POST['title'];
$issue=$_POST['issuedate'];
$publication=$_POST['publication'];
$isbn=$_POST['isbn'];
$type_of_paper=$_POST['type_of_paper'];
$uid=$_POST['uid'];
$file_name= addslashes($_FILES['researchfile']['name']);
move_uploaded_file($_FILES["researchfile"]["tmp_name"],"uploads/" . $_FILES["researchfile"]["name"]);
$qry1="UPDATE research
	SET page_no='$pgno',title='$title',author='$author',issue_date='$issue_date',publication='$publication',isbn='$isbn',type_of_paper='$type_of_paper',uid='$uid',file='$file_name' where f_id='$f_id' and r_id='$update'";
		if (mysqli_query($conn, $qry1))
		{
					header("Location:facultyzone.php");
          break;
		}
		else {
			echo "record not entered error  ".$f_id;
					}
?>
