<?php
session_start();
include("connection.php");

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
$files=$_FILES['researchfile']['name'];
$filename = str_replace(" ", "_", $file_name);
move_uploaded_file($_FILES["researchfile"]["tmp_name"],"uploads/" . $filename);
$qry="insert into research (page_no,title,author,issue_date,publication,isbn,type_of_paper,uid,f_id,file)
values('$pgno','$title','$author','$issue','$publication','$isbn','$type_of_paper','$uid','$f_id','$filename');" or die("fail");
		if (mysqli_query($conn, $qry))
			{
   			header("Location:facultyzone.php");
   		}
   else
	 		{
    		echo "record not entered error  ".$f_id;
			}


?>
