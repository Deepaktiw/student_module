<?php
session_start();
include("connection.php");
$fullname=$_POST['f_name'];
$address=$_POST['address'];
$dofb=$_POST['dob'];
$bloodgroup=$_POST['blood_group'];
$maritalstatus=$_POST['marital_status'];
$email=$_POST['email_id'];
$monumber=$_POST['mobile_number'];
$salary=$_POST['sal'];
$file=$_FILES['image']['tmp_name'];
$image_name= addslashes($_FILES['image']['name']);
$files=$_FILES['image']['name'];
$imagename = str_replace(" ", "_", $image_name);
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $imagename);
$f_id=$_SESSION['user1'];
$select_qry="select (FLOOR(1 + (RAND() * 99999)))";
$res=mysqli_query($conn,$select_qry);
$pd_id=mysqli_fetch_array($res);
$check_qry="select * from personal_details where f_id='$f_id'";
$res1=mysqli_query($conn,$check_qry);
if (mysqli_num_rows($res1) <= 0) {
$qry="insert into personal_details (pd_id,name,address,dob,blood_group,marital_status,email_id,ph_no,salary,image,f_id)
values('$pd_id[0]','$fullname','$address','$dofb','$bloodgroup','$maritalstatus','$email','$monumber','$salary','$imagename','$f_id');" or die("fail");
	if (mysqli_query($conn, $qry))
		{
   			header("Location:facultyzone.php");
   	}
  else {
    echo "record not entered error  ".$f_id;
				}
}
else {
	$qry1="UPDATE personal_details
SET name='$fullname',address='$address',dob='$dofb',blood_group='$bloodgroup',marital_status='$maritalstatus',email_id='$email',ph_no='$monumber',salary='$salary',image='$imagename' where f_id='$f_id'";
	if (mysqli_query($conn, $qry1))
		{
	   			header("Location:facultyzone.php");
	   }
	   else {
	    echo "record not entered error  ".$f_id;

	}

}


?>
