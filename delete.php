<!DOCTYPE html >
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
  
 <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript"></script>


  <link rel="icon" href="icon2.png" type="image/gif" sizes="16x16">

  <title>Student Info</title>

</head>

<body>

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
      <a class="nav-link btn disabled" href="delete.php">Delete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
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

<form method="POST" action="">
<div class="center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-25">
		       <span class="label success">Enter Roll No </span>
          </div>
          <div class="col-50">
		        <input class="form-control input-sm" type="text" name="rn" placeholder="Enter Roll">
          </div>
          <div class="col-50">
		        <input class="btn btn-warning" type="submit" name="submit" value="Delete">
          </div>
        </div>
      </div>
</div>

</form>
</body>
</html>

<?php
require'db_conn.php';

if(isset($_POST["rn"]))
{
$rn=$_POST['rn'];
}
if(isset($_POST['submit']))
 {

 $del="DELETE FROM bhup where rn='$rn'";

if(mysqli_query($conn, $del))
{
 echo '<script>
 alert("Record Successfully Deleted");
 </script>';
}
else
{
echo'<script>
alert("Record Not Deleted");
</script>';
}
 }
?>