<html>
<head>
  <title>Welcome</title>
  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- QR code genaration-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
</script>
<script src="js/fac.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/fac.css" />
  <script type="text/javascript">
  $(document).ready(function(){
	$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
		localStorage.setItem('activeTab', $(e.target).attr('href'));
	});
	var activeTab = localStorage.getItem('activeTab');
	if(activeTab){
		$('#myTab a[href="' + activeTab + '"]').tab('show');
	}

});

function generateBarCode()
{

    var nric = $('#text').val();
    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=150x150' ;
    $('#barcode').attr('src', url);
     $("#barcode").attr('data' ,"bookmark.swf");

}

function image(img) {
    var src = img.src;
    window.open(src);
}

  </script>
</head>
<body background="bg_image3.jpg">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">Icfai Tech School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>
  <ul class="navbar-nav ml-auto">

        <a class="nav-link disabled active">
          <?php
session_start();
$_SESSION["user1"];
if($_SESSION["user1"]==true)
{
echo " welcome ". $_SESSION["user1"];
}
else
{
  header('location:index.html');
}
?></a>
        <a class="nav-link" href="sessionlogout.php">Log out</a>
        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Change your password</a>

    </ul>

  </nav>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Set a strong password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="form-control-label">Old password</label>
                <input type="password" id="old" class="form-control">
                <div id="oldm"> </div>
            </div>
            <div class="form-group">
              <label class="form-control-label">New password</label>
                <input type="password" id="new" class="form-control">
                <div id="newm"></div>
            </div>
            <div class="form-group">
              <label class="form-control-label">Confirm New password</label>
                <input type="password" id="newcon" class="form-control">
                <div id="newconm"></div>
            </div>
            <div id="message">

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="passwordvalidate">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <ul class="nav nav-tabs" role="tablist" id="myTab">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#teaching">Teaching</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#research">Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#professional">Professional</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#report">Report</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#at">Attendance</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="personal" class="container tab-pane active">
        <div class="card border-success mb-6">
          <div class="card-header"><i class="fa fa-user"></i> &nbsp;Information<button type="button" class="fa fa-edit" data-toggle="modal" data-target="#myModal2"></button>
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit intro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php
            			  include ('connection.php');
            			  $f_id=$_SESSION["user1"];
            			  $sql="select name,address,dob,blood_group,marital_status,email_id,ph_no,salary,image from personal_details where f_id='$f_id' ";
            			  $result=mysqli_query($conn,$sql);
            			  $row=mysqli_fetch_array($result);
                    echo "<form method='post' action='insert_personal.php' enctype='multipart/form-data'>
                      <div class='form-group'>
                        <label class='form-control-label'>Full Name</label>
                        <input type='text' class='form-control' name='f_name' value='".$row['name']."'>
                      </div>
                      <div class='form-group'>
                        <label class='form-control-label'>Address</label>
                        <input type='text' class='form-control' name='address' value='".$row['address']."'>
                      </div>
                      <div class='form-group row'>
                        <div class='col-sm-4'>
                          <label class='form-control-label'>Date of birth</label>
                          <input type='date' class='form-control' name='dob' value='".$row['dob']."'>
                        </div>
                        <div class='col-sm-4'>
                          <label class='form-control-label'>Blood group</label>
                          <select class='custom-select' name='blood_group' value='".$row['blood_group']."'>
                            <option selected>Choose</option>
                            <option value='O negative'>O negative</option>
                            <option value='O positive'>O positive</option>
                            <option value='A negative'>A negative</option>
                            <option value='A positive'>A positive</option>
                            <option value='B negative'>B negative</option>
                            <option value='AB negative'>AB negative</option>
                            <option value='AB positive'>AB positive</option>
                          </select>
                        </div>
                        <div class='col-sm-4'>
                          <label class='form-control-label'>Marital status</label>
                          <select class='custom-select' name='marital_status' value='".$row['marital_status']."'>
                            <option selected>Choose</option>
                            <option value='Single'>Single</option>
                            <option value='Married'>Married</option>
                            <option value='Divorced'>Divorced</option>
                            <option value='Widowed'>Widowed</option>
                          </select>
                        </div>

                      </div>
                      <div class='form-group row'>
                        <div class='col-sm-6'>
                          <label class='form-control-label'>E-mail address</label>
                          <input type='email' id='email' name='email_id' class='form-control' value='".$row['email_id']."'>
                        </div>
                        <div class='col-sm-3'>
                          <label class='form-control-label'>Mobile number</label>
                          <input type='text' class='form-control' name='mobile_number' value='".$row['ph_no']."'>
                        </div>
                        <div class='col-sm-3'>
                          <label class='form-control-label'>Salary</label>
                          <input type='text' class='form-control' name='sal' value='".$row['salary']."'>
                        </div>
                      </div>
                    <div class='form -group-row'>
                  <div class='col-sm-4'>
                  <label class='form-control-label'>Upload image</label>
                  <input type='file' name='image'>
                  </div>
                </div>
                      <div class='modal-footer'>
                    <button type='submit' class='btn btn-info'>Save changes</button>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                  </div>
                </div>
                    </form>";
                    ?>
                  </div>


              </div>
              </div>
              </div>

              <div class="card-body">
			  <?php
			  include ('connection.php');
			  $f_id=$_SESSION["user1"];
			  $sql="select name from personal_details where f_id='$f_id' ";
			  $result=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($result);


              echo"<h4 class='card-title'>Welcome ".$row[0];echo "</h4>";
			  ?>
              <p class="card-text">
			  <?php
			  include ('connection.php');
			  $f_id=$_SESSION["user1"];
			  $sql="select name,address,dob,blood_group,marital_status,email_id,ph_no,salary,image from personal_details where f_id='$f_id' ";
			  $result=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($result);
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-10'><mark>Name:</mark>$row[0]";
			  echo"</div>";
			  echo"</div>";
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-10'><mark>Address:</mark>$row[1]";
			  echo"</div>";
			  echo"</div>";
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-4'><mark>Birthdate:</mark>$row[2]";
			  echo"</div>";
			  echo"<div class='col-sm-4'><mark>Blood group:</mark>$row[3]";
			  echo"</div>";
			  echo"<div class='col-sm-4'><mark>Marital status:</mark>$row[4]";
			  echo"</div>";
			  echo"</div>";
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-4'><mark>Email-id:</mark>$row[5]";
			  echo"</div>";
			  echo"<div class='col-sm-4'><mark>Contact:</mark>$row[6]";
			  echo"</div>";
			  echo"<div class='col-sm-4'><mark>Salary:</mark>$row[7]";
			  echo"</div>";
			  echo"</div>";
        echo"<div class='row' style='font-size:18px'>";
        echo"<div class='col-sm-4'><mark>Image:</mark><a href=photos/".$row['image']." target=_blank>Click to see your image.</a>";
			  echo"</div>";
			  echo"</div>";
			  ?>
			  </p>
        </div>
        </div>


  <!--Career starts here-->
  <div class="card border-success mb-3" style="margin-top:20px">
  <div class="card-header"><i class="fa fa-graduation-cap"></i> Career<button type="button" class="fa fa-plus" data-toggle="modal" data-target="#myModal7"></button>
    <div class="modal fade" id="myModal7" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Qualification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="insert_career.php">
            <div class="form-group row">
                        <div class="col-sm-4">
                          <label class="form-control-label">Qualification</label>
                          <select class="custom-select" name="qualification">
                            <option selected>Choose</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Post Graduation">Post Graduation(Master's)</option>
                            <option value="Doctoral(Phd)">Doctoral(Phd)</option>
                          </select>
                        </div>
                        <div class="col-sm-8">
                          <label class="form-control-label">Name of Institute</label>
                          <input type="text" class="form-control" name="name_of_inst">
                        </div>
						</div>
						<div class="form-group row">
						<div class="col-sm-4">
                          <label class="form-control-label">Percentage</label>
                          <input type="text" class="form-control" name="percentage">
                        </div>
						<div class="col-sm-4">
                          <label class="form-control-label">Year</label>
                          <input type="text" class="form-control" name="year">
                        </div>

						</div>
            <div class='modal-footer'>
						<button type="submit" class="btn btn-info" id="addqual">Save Changes</button>
            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
</div>
</form>
            <!--<div id="addingqual"></div>-->


          </div>


      </div>
      </div>
  </div>
</div>

    <!--p class="card-text"-->
      <?php
  include ('connection.php');
  $f_id=$_SESSION["user1"];
  $sql="select q_id,qualification,name_of_inst,percentage,year,f_id from career where f_id='$f_id' ";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    echo "<div class='card border-success mb-6'>";
      echo "<div class='card-header'>".$row['qualification']."&nbsp;<a href=delete.php?id=".$row['q_id']."><button class='fa fa-trash' title='Delete'></button></a>&nbsp;";
      echo "</div>";
    echo "  <div class='card-body'>";
    echo "<p class='card-text'>";
  //<button type='button' name='edit' class='fa fa-edit open-edit' data-id=".$row['r_id']." data-toggle='modal' data-target='#myModal5' title='Edit'></button>&nbsp;
  echo"<div class='row' style='font-size:18px'>";
  echo"<div class='col-sm-10'><mark>Qualification :</mark>". $row['qualification']  ;
  echo"</div>";
  echo"</div>";
  echo"<div class='row' style='font-size:18px'>";
  echo"<div class='col-sm-10'><mark>Institute :</mark>". $row['name_of_inst'];
  echo"</div>";
  echo"</div>";
  echo"<div class='row' style='font-size:18px'>";
  echo"<div class='col-sm-4'><mark>Percentage :</mark>".$row['percentage'];
  echo"</div>";
   echo"<div class='col-sm-4'><mark>Year :</mark>".$row['year'];
  echo"</div>";
  echo"</div>";
  echo "</p>";
  echo "</div>";
  echo "</div>";

  }

  ?>

</div>
</div>




                <div id="teaching" class="container tab-pane fade">

                  <div class="card border-success mb-6">
                    <div class="card-header"><i class="fa fa-book"></i> &nbsp;Teaching<button type="button" class="fa fa-edit" name="teach" data-toggle="modal" data-target="#myModal3"></button>
                      <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit teaching</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <?php
                              include ('connection.php');
                              $f_id=$_SESSION["user1"];
                              $sql="select experience,curr_teaching,subject_taught,expertise,designation,phd_guide from teaching where f_id='$f_id' ";
                              $result=mysqli_query($conn,$sql);
                              $row=mysqli_fetch_array($result);
                              echo "<form method ='post' action ='insert_teaching.php'>
                                <div class='form-group row'>
                                  <div class='col-sm-4'>
                                    <label class='form-control-label'>Experience(in years)</label>
                                    <input type='number' class='form-control' name='experience' value='".$row['experience']."'>
                                  </div>
                                  <div class='col-sm-8'>
                                    <label class='form-control-label'>Subjects currently teaching</label>
                                      <input type='text' class='form-control' name='curr_subject' value='".$row['curr_teaching']."'>
                                  </div>
                                </div>
                                <div class='form-group row'>
                                <div class='col-sm-12'>
                                  <label class='form-control-label'>Subjects taught</label>
                                  <input type='text' class='form-control' name='sub_taught' value='".$row['subject_taught']."'>
                                </div>
                                </div>
                                <div class='form-group row'>

                                  <div class='col-sm-6'>
                                    <label class='form-control-label'>Area of expertise</label>
                                      <input type='text' class='form-control' name='area_expertise' value='".$row['expertise']."'>
                                  </div>


                                  <div class='col-sm-6'>
                                    <label class='form-control-label'>Designation</label>
                                      <input type='text' class='form-control' name='designation' value='".$row['designation']."'>
                                  </div></div><div class='form-group row'>
                                  <div class='col-sm-6'>
                                    <label class='form-control-label'>PhD guide</label>
                                      <input type='text' class='form-control' name='phd_guide' value='".$row['phd_guide']."'>
                                  </div>
                                </div>
								<div class='modal-footer'>
                              <button type='submit' class='btn btn-info'>Save changes</button>
                              <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            </div>
                              </form>";
                              ?>

                            </div>


                          </div>
                        </div>
                        </div>
                        </div>

                        <div class="card-body">
        <?php
			  include ('connection.php');
			  $f_id=$_SESSION["user1"];
			  $sql="select name from personal_details where f_id='$f_id' ";
			  $result=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($result);

              echo"<h4 class='card-title'>Welcome ".$row[0];echo "</h4>";
			  ?>
                        <p class="card-text">
						<?php
			  include ('connection.php');
			  $f_id=$_SESSION["user1"];
			  $sql="select experience,curr_teaching,subject_taught,expertise,designation,phd_guide from teaching where f_id='$f_id' ";
			  $result=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($result);
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-10'><span style='font-weight:bold;color:black'>Experience:</span>$row[0]";
			  echo"</div>";
			  echo"</div>";
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-10'><span style='font-weight:bold;color:black'>Current Subject :</span>$row[1]";
			  echo"</div>";
			  echo"</div>";
			  echo"<div class='row' style='font-size:18px'>";
			  echo"<div class='col-sm-10'><span style='font-weight:bold;color:black'>Subject Taught :</span>$row[2]";
			  echo"</div>";
        echo"</div>";
        echo"<div class='row' style='font-size:18px'>";
        echo"<div class='col-sm-10'><span style='font-weight:bold;color:black'>Area of expertise :</span>$row[3]";
			  echo"</div>";
        echo"</div>";
        echo"<div class='row' style='font-size:18px'>";
        echo"<div class='col-sm-10'><span style='font-weight:bold;color:black'>Designation:</span>$row[4]";
			  echo"</div>";
        echo"</div>";
        echo"<div class='row' style='font-size:18px'>";
        echo"<div class='col-sm-10'><span style='font-weight:bold;color:black'>PhD guide:</span>$row[5]";
			  echo"</div>";
        echo"</div>";
			  ?>
						</p>
                        </div>
                        </div>
                </div>
                <div id="research" class="container tab-pane fade">
                  <div class="card border-success mb-6">
                    <div class="card-header"><i class="fa fa-search"></i> &nbsp;Research<button type="button" id="plus" class="fa fa-plus" data-toggle="modal" data-target="#myModal6" title='Add research'></button>&nbsp;
                      <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit research</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="update_research.php" enctype="multipart/form-data" name="research">
                                <div class="form-group row">
                                  <div class="col-sm-3">
                                    <label class="form-control-label">Page number</label>
                                    <input type="number" class="form-control" name="pgno">
                                  </div>
                                  <div class="col-sm-9">
                                    <label class="form-control-label">Title</label>
                                      <input
                                       type="text" class="form-control" name="title">
                                  </div>
                                </div>
                                <div class="form-group row">

                                  <div class="col-sm-4">
                                    <label class="form-control-label">Author</label>
                                      <input type="text" class="form-control" name="author">
                                  </div>
                                  <div class="col-sm-4">
                                    <label class="form-control-label">Issue date</label>
                                      <input type="date" class="form-control" name="issuedate">
                                  </div>
                                  <div class="col-sm-4">
                                    <label class="form-control-label">Publication</label>
                                      <input type="text" class="form-control" name="publication">
                                  </div>
                                </div>

                                <div class="form-group row">

                                  <div class="col-sm-4">
                                    <label class="form-control-label">ISBN</label>
                                      <input type="text" class="form-control" name="isbn">
                                  </div>
                                  <div class="col-sm-4">
                                    <label class="form-control-label">Type of paper</label>
                                      <input type="text" class="form-control" name="type_of_paper">
                                  </div>
                                  <div class="col-sm-4">
                                    <label class="form-control-label">UID</label>
                                      <input type="text" class="form-control" name="uid">
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="hidden" class="form-control" name="r_id" id="r_id">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label">Upload complete research</label>
                                  <input type="file" name="researchfile">
                                </div>
								                <div class="modal-footer">
                              <button type="submit" id="updateresearch" class="btn btn-info">Save changes</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                              </form>
                            </div>


                          </div>
                        </div>
                      </div>
                        <div class="modal fade" id="myModal6" role="dialog">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Add new research</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="insert_research.php" enctype="multipart/form-data" name="research">
                                  <div class="form-group row">
                                    <div class="col-sm-3">
                                      <label class="form-control-label">Page number</label>
                                      <input type="number" class="form-control" name="pgno">
                                    </div>
                                    <div class="col-sm-9">
                                      <label class="form-control-label">Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                  </div>
                                  <div class="form-group row">

                                    <div class="col-sm-4">
                                      <label class="form-control-label">Author</label>
                                        <input type="text" class="form-control" name="author">
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-control-label">Issue date</label>
                                        <input type="date" class="form-control" name="issuedate">
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-control-label">Publication</label>
                                        <input type="text" class="form-control" name="publication">
                                    </div>
                                  </div>

                                  <div class="form-group row">

                                    <div class="col-sm-4">
                                      <label class="form-control-label">ISBN</label>
                                        <input type="text" class="form-control" name="isbn">
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-control-label">Type of paper</label>
                                        <input type="text" class="form-control" name="type_of_paper">
                                    </div>
                                    <div class="col-sm-4">
                                      <label class="form-control-label">UID</label>
                                        <input type="text" class="form-control" name="uid">
                                    </div>
                                  </div>
								  <div class="form-group">
                                  <label class="form-control-label">Upload complete research</label>
                                  <input type="file" name="researchfile">
                                </div>
 								<div class="modal-footer">
                                <button type="submit" id="addresearch" class="btn btn-info">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                                </form>
                              </div>


                            </div>
                          </div>
                          </div>
                        </div>

  <div class="card-body">
						 <?php
			  include ('connection.php');
			  $f_id=$_SESSION["user1"];
			  $sql="select name from personal_details where f_id='$f_id' ";
			  $result=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($result);

              echo"<h4 class='card-title'>Welcome ".$row[0];echo "</h4>";
			  ?>
                        <p class="card-text">

                        </div>
                      </div>

					<div id="addingresearch">
<?php
include ('connection.php');

$f_id=$_SESSION["user1"];
$sql="select page_no,title,author,issue_date,publication,isbn,type_of_paper,uid,r_id,file from research where f_id='$f_id' ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  echo "<div class='card border-success mb-6'>";
    echo "<div class='card-header'>".$row['title']."&nbsp;<a href=delete.php?id=".$row['r_id']."><button class='fa fa-trash' title='Delete'></button></a>&nbsp;";
    echo "</div>";
  echo "  <div class='card-body'>";
  echo "<p class='card-text'>";
//<button type='button' name='edit' class='fa fa-edit open-edit' data-id=".$row['r_id']." data-toggle='modal' data-target='#myModal5' title='Edit'></button>&nbsp;
echo"<div class='row' style='font-size:18px'>";
echo"<div class='col-sm-10'><mark>Page No :</mark>". $row['page_no']  ;
echo"</div>";
echo"</div>";
echo"<div class='row' style='font-size:18px'>";
echo"<div class='col-sm-10'><mark>Title :</mark>". $row['title'];
echo"</div>";
echo"</div>";
echo"<div class='row' style='font-size:18px'>";
echo"<div class='col-sm-4'><mark>Author :</mark>".$row['author'];
echo"</div>";
 echo"<div class='col-sm-4'><mark>Issue Date :</mark>".$row['issue_date'];
echo"</div>";
echo"<div class='col-sm-4'><mark>Publication :</mark>".$row['publication'];
echo"</div>";
echo"</div>";
echo"<div class='row' style='font-size:18px'>";
echo"<div class='col-sm-4'><mark>ISBN :</mark>".$row['isbn'];
echo"</div>";
echo"<div class='col-sm-4'><mark>Type of Paper :</mark>".$row['type_of_paper'];
echo"</div>";
echo"<div class='col-sm-4'><mark>UID :</mark>".$row['uid'];
echo"</div>";
echo"</div>";

echo"<div class='row' style='font-size:18px'>";
echo"<div class='col-sm-10'><mark>Uploaded Research :</mark><a href=uploads/".$row['file']." target=_blank>Click to see your file.</a>";
echo"</div>";
echo"</div>";

echo"<div class='row' style='font-size:18px'>";
echo "<div class='col-sm-10' style='display:none;'>".$row['r_id'];
echo"</div>";
echo "</div>";

echo "</p>";
echo "</div>";
echo "</div>";

}




/*echo" <script type= 'text/javascript' > $('#addresearch').click(function(){
      $('#addingresearch').append('<div class='card border-success mb-6' style='margin-top:40px;'>\
                  <div class='card-header'><i class='fa fa-search'></i> &nbsp;Research<button type='button' id='plus' class='fa fa-plus' data-toggle='modal' data-target='#myModal6'></button>&nbsp;<button type='button' class='fa fa-edit' data-toggle='modal' data-target='#myModal5'></button>&nbsp;</div>\
          <div class='card-body'>\
                      <h4 class='card-title'>Welcome professor</h4>\
                      <p class='card-text'>Fill your details...</p>\
                      </div>\
          </div>');\
  $('#plus').remove();
}); </script>";*/
 ?>

</div>
                </div>

                <div id="professional" class="container tab-pane fade">
                  <div class="card border-success mb-6">
                    <div class="card-header"><i class="fa fa-university"></i> &nbsp;Professional<button type="button" class="fa fa-plus" title="Add" data-toggle="modal" data-target="#myModal4"></button>
                      <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit Professional</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="insert_professional.php" enctype="multipart/form-data" >
                                <div class="form-group row">
                                  <div class="col-sm-3">
                                    <label class="form-control-label">Event type:</label>
                                    <select class="custom-select" name="event_type">
                                      <option selected>Choose</option>
                                      <option value="Workshop">Workshop</option>
                                      <option value="Seminar">Seminar</option>
                                      <option value="Conference">Conference</option>
                                    </select>
                                  </div>
                                <div class="col-sm-3">
                                    <label class="form-control-label">Activity type:</label>
                                    <select class="custom-select" name="activity_type">
                                      <option selected>Choose</option>
                                      <option value="Attended">Attended</option>
                                      <option value="Conducted">Conducted</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="form-control-label">Event name</label>
                                      <input type="text" class="form-control" name="event_name">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-6">
                                    <label class="form-control-label">Venue</label>
                                      <input type="text" class="form-control" name="venue">
                                  </div>
                                <div class="col-sm-4">
                                    <label class="form-control-label">Date</label>
                                      <input type="date" class="form-control" name="date">
                                  </div>
                                  <div class="col-sm-2">
                                    <label class="form-control-label">Duration</label>
                                      <input type="number" class="form-control" name="duration">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-12">
                                    <label class="form-control-label">Description</label>
                                      <textarea class="form-control" rows="4" name="desc"></textarea>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-4">
                                    <label class="form-control-label">Upload certificate</label>
                                      <input type="file" name= "image">
                                  </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                              <button type="submit" class="btn btn-info">Save changes</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                        </div>
                        </form>
                        </div>

                        <div class="card-body">
                          <?php
             			  include ('connection.php');
             			  $f_id=$_SESSION["user1"];
             			  $sql="select name from personal_details where f_id='$f_id' ";
             			  $result=mysqli_query($conn,$sql);
             			  $row=mysqli_fetch_array($result);

                           echo"<h4 class='card-title'>Welcome ".$row[0];echo "</h4>";
             			  ?></div>
                        <p class="card-text">
                          <?php
                          include ('connection.php');

                          $f_id=$_SESSION["user1"];
                          $sql="select p_id,event_type,activity_type,event_name,venue,date,duration,description,file from professional where f_id='$f_id' ";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_assoc($result)){
                            echo "<div class='card border-success mb-6'>";
                              echo "<div class='card-header'>".$row['event_type']."&nbsp;<a href=del_pro.php?id=".$row['p_id']."><button class='fa fa-trash' title='Delete'></button></a>&nbsp;";
                              echo "</div>";
                            echo "  <div class='card-body'>";
                            echo "<p class='card-text'>";
                          //<button type='button' name='edit' class='fa fa-edit open-edit' data-id=".$row['r_id']." data-toggle='modal' data-target='#myModal5' title='Edit'></button>&nbsp;
                          echo"<div class='row' style='font-size:18px'>";
                          echo"<div class='col-sm-10'><mark> Event Type :</mark>". $row['event_type']  ;
                          echo"</div>";
                          echo"</div>";
                          echo"<div class='row' style='font-size:18px'>";
                          echo"<div class='col-sm-10'><mark>Activity :</mark>". $row['activity_type'];
                          echo"</div>";
                          echo"</div>";
                          echo"<div class='row' style='font-size:18px'>";
                          echo"<div class='col-sm-4'><mark>Event Name :</mark>".$row['event_name'];
                          echo"</div>";
                           echo"<div class='col-sm-4'><mark>Venue :</mark>".$row['venue'];
                          echo"</div>";
                          echo"<div class='col-sm-4'><mark>Date :</mark>".$row['date'];
                          echo"</div>";
                          echo"</div>";
                          echo"<div class='row' style='font-size:18px'>";
                          echo"<div class='col-sm-4'><mark>Duration(in days) :</mark>".$row['duration'];
                          echo"</div>";
                          echo"<div class='col-sm-4'><mark>Description :</mark>".$row['description'];
                          echo"</div>";

                          echo"</div>";

                          echo"<div class='row' style='font-size:18px'>";
                          echo"<div class='col-sm-10'><mark>Uploaded Certificate :</mark><a href=event/".$row['file']." target=_blank>Click to see your certificate.</a>";
                          echo"</div>";
                          echo"</div>";

                          echo "</p>";
                          echo "</div>";
                          echo "</div>";

                          }

                           ?>
                         </p>
                </div>
    </div>

<div id="at" class="container tab-pane fade">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <h1>QR-Code Generator</h1>
   <?php
   include ('connection.php');
   $f_id=$_SESSION["user1"];
   $sql="select name from personal_details where f_id='$f_id' ";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
    echo"
     <label> Teacher Name: <input  id='text'  type='text' class='form-control'  style='Width:100%' value='".$row['name']."'  ></label>
     "?></br>
<div id="form-wrapper" style="width:46%; float:left; border:5px solid rgba(255,255,255,0.6); margin-top:20px; padding:10px">
      <form id="generator">
          <label for="codeSize" style="font-size:20px; margin-right:20px; color:#85DCB;">Select QR Code Size:</label>
          <select id="codeSize"  class=Form-control " "name="codeSize" style="width:260px; height:40px; ">
              <option value="75">XSmall</option>
              <option value="155">Small</option>
              <option value="186">Medium</option>
              <option value="248" selected="selected">Large</option>
              <option value="300">XLarge</option>
              <option value="450">XXLarge</option>
          </select>
        <label for="use" style="font-size:20px; margin-right:20px; color:#85DCB;"> Link:
         <input type="text" onclick="myFunction()"   class='Form-control' id="codeData" name="codeData" size="50" value='https://docs.google.com/forms/d/e/1FAIpQLSemZlZfpiyt57ous0S0JwaY-H1rlqZ5fgLKfvm2BN2a15Guqw/viewform?usp=pp_url' placeholder="Enter a url or text" style="margin-top:20px" autocomplete="off"/ >
         </label>
          <br>
          <button id="generate">generate</button>
      </form>
      <div id="alert" style="height:20px; text-align:center; margin:10px auto"></div>
  </div>

    <div style="float:right;">
     <div id="image" style="margin:auto"></div>
     <div id="link" style="margin-top:10px; text-align:center"></div>
    </div>

    <div id="code" style="float:left; width:100%; height:20px; text-align:center; margin-top:10px"></div>
  <script>
  function myFunction() {
       document.getElementById("alert").innerHTML = "";
    }
  $("#generate").on("click", function () {
  var data = $("#codeData").val();
  var size = $("#codeSize").val();
  if(data == "") {
      $("#alert").append("<p style='color:#fff;font-size:20px'>Please Enter A Url Or Text</p>"); // If Input Is Blank
      return false;
  } else {
      if( $("#image").is(':empty')) {

      //QR Code Image
        $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");

      //This Provide An Image Download Link
        $("#link").append("<a style='color:#fff;' href='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "'><h6 style='color:#85DCB;'>Download QR Code</h6></a>");

        return false;
  } else {
        $("#image").html("");
        $("#link").html("");
        $("#code").html("");

        //QR Code Image
        $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");

      //This Provide An Image Download Link
        $("#link").append("<a style='color:#85DCB;' href='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "'><h5 style='color:#85DCB;'>Download QR Code</h5></a>");
      //This Provide the Image Link Path In Text
        $("#code").append("<p style='color:#fff;'><strong>Image Link:</strong> http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "</p>");
        return false;
      }
    }
  });
  </script>

</div>
</div>
</div>
</body>
</html>
