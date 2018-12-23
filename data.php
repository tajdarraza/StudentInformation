<!Doctype html>
<head>

<meta charset="UTF-8"/>
<meta http-equiv="refresh">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
  

 	<link rel="stylesheet" href="style.css">
 	<link rel="stylesheet" type="text/css" href="util.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="path/to/chartjs/dist/Chart.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
 <script src="path/to/Chart.min.js"></script>
 <script src="../../../dist/2.7.3/Chart.bundle.js"></script>
 <script src="../utils.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<img src="icon.svg" alt="Logo" style="width:50px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="home.php">Home</a>
    </li>
        <li class="nav-item">
      <a class="nav-link btn disabled" href="data.php">Analysis</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="delete.php">Delete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
     <li class="nav-item">
      <a class="nav-link " href="update.php">Update</a>
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
<body>

<?php

require("db_conn.php");




$qall=mysqli_query($conn,"SELECT COUNT('branch') FROM `bhup` ");
$row = mysqli_fetch_row($qall); 
$all= $row[0];



$qcs=mysqli_query($conn,"SELECT COUNT(*) FROM `bhup` where `branch`='cs'");
$row = mysqli_fetch_row($qcs); 
$cs = $row[0];



$qec=mysqli_query($conn,"SELECT COUNT(*) FROM `bhup` where `branch`='ec'");
$row = mysqli_fetch_row($qec); 
$ec= $row[0];



$qme=mysqli_query($conn,"SELECT COUNT(*) FROM `bhup` where `branch`='mechanical'");
$row = mysqli_fetch_row($qme); 
$me= $row[0];



$qcv=mysqli_query($conn,"SELECT COUNT(*) FROM `bhup` where `branch`='civil'");
$row = mysqli_fetch_row($qcv); 
$cv = $row[0];

$qis=mysqli_query($conn,"SELECT COUNT(*) FROM `bhup` where `branch`='is'");
$row = mysqli_fetch_row($qis); 
$is= $row[0];



$qee=mysqli_query($conn,"SELECT COUNT(*) FROM `bhup` where `branch`='eee'");
$row = mysqli_fetch_row($qee); 
$ee= $row[0];


$data = array(
	array("label"=> "CSE", "y"=> $cs ),
	array("label"=> "ECE", "y"=> $ec),
	array("label"=> "ISE", "y"=> $is),
	array("label"=> "Mechanical", "y"=> $me),
	array("label"=> "Civil", "y"=> $cv),
	array("label"=> "EEE", "y"=> $ee),
	);
?>



  <canvas  class ="chart" id="myChart" ></canvas>
<script>


var ctx = document.getElementById("myChart");
document.getElementById("myChart").style.width = "100px";
document.getElementById("myChart").style.height = "40px";


var myChart = new Chart(ctx, {

    type: 'bar',
    data: {
        labels: ["CSE", "ECE", "IS", "Mechanical", "Civil", "EEE"],
        datasets: [{
            label: '# of Students',
            data: ['<?php print($cs); ?>','<?php print($ec); ?>','<?php print($is); ?>','<?php print($me); ?>','<?php print($cv); ?>','<?php print($ee); ?>','<?php print($all); ?>'],
            backgroundColor: [
            	
                'rgba(255, 99, 132, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(75, 192, 192, 0.4)',
                'rgba(153, 102, 255, 0.4)',
                'rgba(255, 159, 64, 0.4)'
            ],
            borderColor: [
            	
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
      legend: {
            labels: {
                
            }
        },

        scales: {
          xAxes: [{
                ticks: {
                fontStyle:"bold", 
                      fontColor:"black",
                      fontSize:"12",
                    beginAtZero:true
                }
            }],
            yAxes: [{
                ticks: { 
                        fontStyle:"bold",
                      fontColor:"black",
                      fontSize:"12",
                    beginAtZero:true
                }
            }]
        }
    }
});





</script>

</body>
<button class="btn btn-info" id="dbtn" onclick="location.href='pie.php'"> See in Pie
</button>
</html>