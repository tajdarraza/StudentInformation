<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta http-equiv="refresh">

	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
  
  	<link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>

  <script type="text/javascript">
  	

     function validate()
{
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
  var session=document.reg.session.value;
  var rn=document.reg.rn.value;
  var branch=document.reg.branch.value;
  var year=document.reg.year.value;
  var semester=document.reg.semester.value;
  var bday=document.reg.bday.value;
  var address=document.reg.address.value;

if(fname=='')
  {
    window.alert("Please Enter First Name!");
    document.reg.fn.focus();
    return false;
}
 
 if(lname=='')
  {
    window.alert("Please Enter Last Name!");
    document.reg.ln.focus();
    return false;

 }
 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(year=='')
  {
    window.alert("Please Select Year!");
    document.reg.year.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.semester.focus();
    return false;

 }
 if(bday=='')
  {
    window.alert("Please Select DOB!");
    document.reg.bday.focus();
    return false;

 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;
  }
}
</script>

<link rel="icon" href="icon2.png" type="image/gif" sizes="16x16">

<title>Student Info</title>

</head>

<body>
	<form method="POST" action="" name="reg" onSubmit="return validate()">

 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <img src="icon.svg" alt="Logo" style="width:50px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
   
       <li class="nav-item">
      <a class="nav-link " href="data.php">Analysis</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="delete.php">Delete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
     <li class="nav-item">
      <a class="nav-link btn disabled" href="update.php">Update</a>
    </li>

     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Websites </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href=http://www.google.com/ >Google</a>
        <a class="dropdown-item" href=http://www.youtube.com/>YouTube</a>
        <a class="dropdown-item" href=http://www.hkbk.edu.in/>HKBK</a>
      </div>
    </li>
        <li class="nav-item">
      <a class="btn btn-danger" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<div class"limiter">
		<div class="center">
		<div class="container-fluid">
			<div class="row">
     			<div class="col-25">
					<span class="label success">First Name </span>
		 		</div>
      			<div class="col-50">
					<input class="form-control input-sm" type="text" name="fn" placeholder="First Name"/>
				</div>
			</div>

			<div class="row">
     			<div class="col-25">
					<span class="label success">Last Name </span>
				</div>
				<div class="col-50">
					<input class="form-control input-sm" type="text" name="ln" placeholder="Last Name"/>
				</div>
			</div>
	
			<div class="row">
     			<div class="col-25">
					<span class="label success">Session </span>
 				</div>
 				<div class="col-50">
 					<select class="form-control input-sm" name="session">
						<option>Select Session</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
   					</select>
 				</div>
 			</div>
		
			<div class="row">
     			<div class="col-25">
					<span class="label success">Roll No </span>
				</div>
			<div class="col-50">
				<input class="form-control input-sm" type="text" name="rn" placeholder="Enter Roll">
			</div>
			</div>

			<div class="row">
     			<div class="col-25">
					<span class="label success">Branch </span>
				</div>
				<div class="col-50">
					<select class="form-control input-sm" name="branch">
						<option>Select Branch</option>
						<option value="CS">CS</option>
						<option value="IS">IS</option>
						<option value="EC">EC</option>
						<option value="Civil">Civil</option>
						<option value="Mechanical">Mechanical</option>
						<option value="EEE">EEE</option>
					</select>
				</div>
			</div>

			<div class="row">
     			<div class="col-25">
					<span class="label success">Year </span>
				</div>
				<div class="col-50">
					<select class="form-control input-sm" name="year">
						<option >Select Year</option>
						<option value="First">First</option>
						<option value="Second">Second</option>
						<option value="Third">Third </option>
						<option value="Fourth">Fourth</option>
					</select>
				</div>
			</div>

			<div class="row">
     			<div class="col-25">
					<span class="label success">Semester </span>
				</div>

				<div class="col-50">
					<select class="form-control input-sm" name="semester">
						<option>Select Semester</option>
						<option value="First">First</option>
						<option value="Second">Second</option>
						<option value="Third">Third </option>
						<option value="Fourth">Fourth</option>
						<option value="Fifth">Fifth</option>
						<option value="Sixth">Sixth</option>
						<option value="Seventh">Seventh</option>
						<option value="Eight">Eight</option>
					</select>
				</div>
			</div>


			<div class="row">
		     	<div class="col-25">
					<span class="label success">Date of Birth </span>
				</div>
				<div class="col-50">
					<input class="form-control input-sm" type="date" name="bday">
				</div>
			</div>

			<div class="row">
     			<div class="col-25">
					<span class="label success">Address </span>
				</div>
				<div class="col-50">
					<input class="form-control input-sm"  type="text" name="address" placeholder="Enter Address"/>
				</div>
			</div>

		
	 
		 	<div class="row">
		 		<div class="col-25">
			 		<input type="submit" class="btn" name="submit" value="Update Details" />
				</div>
				<div class="col-25">
		 			<input type="reset"  class="btn btn-warning" value="Reset"/>
				</div>
			</div>
		

		</div>
	</div>
</div>
</form>
</body>
</html>


<?php
require'db_conn.php';

if(isset($_POST["fn"])){
$fn=$_POST['fn'];
}
if(isset($_POST["ln"])){
$ln=$_POST['ln'];
}
if(isset($_POST["session"])){
$session=$_POST['session'];
}

if(isset($_POST["rn"])){
$rn=$_POST['rn'];
}
if(isset($_POST["branch"])){
$branch=$_POST['branch'];
}

if(isset($_POST["year"])){
$year=$_POST['year'];
}
if(isset($_POST["semester"])){
$semester=$_POST['semester'];
}

if(isset($_POST["bday"])){
$bday=$_POST['bday'];
}

if(isset($_POST["address"])){
$address=$_POST['address'];
}

if(isset($_POST["fn"])){
	$fn=$_POST['fn'];
$cap1=strtoupper($fn);
}

if(isset($_POST["ln"])){
	$ln=$_POST['ln'];
$cap2=strtoupper($ln);

}

if(isset($_POST["address"])){
	$address=$_POST['address'];
$cap3=strtoupper($address);
}

if(isset($_POST["submit"]))
 {
 $q1=mysqli_query($conn, "UPDATE  bhup set fname='$cap1',lname='$cap2',session='$session',rn ='$rn',branch='$branch',year='$year',semester='$semester',dob='$bday',address='$cap3' where rn ='$rn'");
 $update=mysqli_affected_rows($conn);
if($update>0)
{
 echo'<div class="alert" id="success"> <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> <strong>Success!</strong> Information Successfully Updated
</div><script>
var close = document.getElementsByClassName("closebtn");
var i;
for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}</script>'; 

}
else
{
echo'<div class="alert" id="warning"> <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> <strong>Failed! </strong> Information Not Updated
</div><script>
var close = document.getElementsByClassName("closebtn");
var i;
for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}</script>';

}
 }
?>