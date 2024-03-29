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
</head>

<body>

        
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Forgot Password</h2>
                    <form method="POST"  class="was-validated">
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required> 
                        </div>
                       
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="New Password" name="password"required> 
                        </div>
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" value="submit" name="submit" type="submit">
                        </div>
                        
                       
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
    <?php
       include_once 'conn.php';
       if(isset($_POST['submit'])) {  
           $email = $_POST['email'];
           $password = $_POST['password'];
           $sql = "SELECT email FROM student WHERE email='$email'";
           $result = mysqli_query($mysqli, $sql);
           $count = mysqli_num_rows($result);
     
           if ($count == 1)
           {
            
            $sql = "UPDATE student SET password='$password' WHERE email='$email'";
            echo "<script>
            alert('Forgot successful');
            window.location.href='login.php';
            </script>";
          if ($mysqli->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $mysqli->error;
            }
            
           }
           else
           {
    
            echo "<script>
            alert('invalide Email ID');
            window.location.href='index.php';
            </script>";
             
           }
            
       }
       
       
       
       ?>
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