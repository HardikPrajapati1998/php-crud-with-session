<!DOCTYPE html>
<html lang="en">

<head>
    <!--  meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
    input:invalid {
		border-color: red;
	}
	input,
	input:valid {
		border-color: green;
	}
    </style>
</head>

<body>
       
        
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
            <div class="container">
            <h2>Data</h2>
            <a href="logout.php" class="text-center"><button type='button' class='btn btn-danger'>Logout</button></a>
                <?php
include_once 'conn.php';
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
session_start();
$now = time(); // Checking the time now when home page starts.

if ($now > $_SESSION['expire']) {
    session_destroy();
    header("location:login.php");
}
if(!$_SESSION["email"]){
    header("location:login.php");
}
$sql = "SELECT * FROM student";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-dark table-hover' ><thead><tr> <th>Firstname</th>   
    <th>Birthday</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tbody><tr><td>".$row["fname"]."</td><td> ".$row["birthday"]."</td><td> ".$row["gender"]."</td><td> ".$row["email"]."</td><td> ".$row["phone"]."</td><td><td><a href='delete.php?email=".$row['email']."'><button type='button' class='btn btn-danger'>Delete</button></a></td></td></tr></tbody>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$mysqli->close();
?>            
 
</div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->