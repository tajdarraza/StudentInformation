<!Doctype html>

<title> Search </title>
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
      <a class="nav-link btn disabled" href="search.php">Search</a>
  </li>
   <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
    </li>

  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Websites</a>
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


    <div class="center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-25">
            <span class="label success">Select Option </span>
          </div>
          <div class="col-25">
              <select class="form-control" name='sel'>
              <option > Select Category </option>
              <option value='fname'>First Name</option>
              <option value='rn'>Roll No</option>
              <option value='branch'>Branch</option>
              <option value='semester'>Semester</option>
              <option value='address'>Address</option>
              </select>
          </div>
        </div>
        <div class="row" >
              <div class="col-25">
                <input class="form-control input-sm" type='text' name='ty' placeholder="Enter">
              </div>
              <div class="col-25">
                <input class="btn" type="submit" name="se" value="Search">
                <input class="btn btn-warning" type="submit" name='se1'  value="All Search">
              </div>

          </div>
         
        </div>
      </div>
</form>
</body>

<?php
 require'db_conn.php';


if (isset($_POST["ty"]))
{
$ty=$_POST['ty'];
}

if (isset($_POST["sel"]))
{
$sel=$_POST['sel'];
}

if(isset($_POST["se"]))
 {

  if($sel=="fname")
  {
$q1=mysqli_query($conn,"select* from bhup where fname='$ty'");
echo"<center><table border='1' class='table table-striped'>";
  echo"<tr><td><center>Session</center><td><center>Roll No</center><td><center>First Name</center><td><center>Last Name</center><td><center>Year</center><td><center>Semester</center><td><center>Branch</center><td><center>DOB</center><td><center>Address</center></td></tr>";

  while($rows=mysqli_fetch_array($q1))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}

 echo"</center>";
}
}
if(isset($_POST["se"]))
 {
 if($sel=="rn")
  {
$q2=mysqli_query($conn,"select* from bhup where rn='$ty'");
echo"<center><table border='1' class='table table-striped'>";
  echo"<tr><td><center>Session</center><td><center>Roll No</center><td><center>First Name</center><td><center>Last Name</center><td><center>Year</center><td><center>Semester</center><td><center>Branch</center><td><center>DOB</center><td><center>Address</center></td></tr>";

  while($rows=mysqli_fetch_array($q2))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
}
if(isset($_POST["se"]))
 {
if($sel=="branch")
  {
$q3=mysqli_query($conn,"select* from bhup where branch='$ty'");
echo"<center><table border='1' class='table table-striped'>";
 echo"<tr><td><center>Session</center><td><center>Roll No</center><td><center>First Name</center><td><center>Last Name</center><td><center>Year</center><td><center>Semester</center><td><center>Branch</center><td><center>DOB</center><td><center>Address</center></td></tr>";

  while($rows=mysqli_fetch_array($q3))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
}
if(isset($_POST["se"]))
 {
if($sel=="semester")
  {
$q4=mysqli_query($conn,"select* from bhup where semester='$ty'");
echo"<center><table border='1' class='table table-striped'>";
 echo"<tr><td><center>Session</center><td><center>Roll No</center><td><center>First Name</center><td><center>Last Name</center><td><center>Year</center><td><center>Semester</center><td><center>Branch</center><td><center>DOB</center><td><center>Address</center></td></tr>";


  while($rows=mysqli_fetch_array($q4))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr ><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
}
if(isset($_POST["se"]))
 {
if($sel=="address")
  {
$q5=mysqli_query($conn,"select* from bhup where address='$ty'");
echo"<center><table border='1' class='table table-striped'>";
 echo"<tr><td><center>Session</center><td><center>Roll No</center><td><center>First Name</center><td><center>Last Name</center><td><center>Year</center><td><center>Semester</center><td><center>Branch</center><td><center>DOB</center><td><center>Address</center></td></tr>";


  while($rows=mysqli_fetch_array($q5))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
}
if(isset($_POST['se1']))
 {
$q6=mysqli_query($conn,"select* from bhup");
echo"<center><table border='1' class='table table-striped'>";
 echo"<tr><td><center>Session</center><td><center>Roll No</center><td><center>First Name</center><td><center>Last Name</center><td><center>Year</center><td><center>Semester</center><td><center>Branch</center><td><center>DOB</center><td><center>Address</center></td></tr>";


  while($rows=mysqli_fetch_array($q6))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}




?>


