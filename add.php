<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once 'conn.php';
echo  ":::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::;";


if(isset($_POST['submit'])) {  

    $fname = $_POST['name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
 
    $sql = "SELECT email FROM student WHERE email='$email' ";

    $result = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);
echo " $count";
    if ($count == 1)
    {
        
        echo "<script>
alert('email already exist');
window.location.href='index.php';
</script>";
       
    }
    else
    {


        $result = mysqli_query($mysqli, "INSERT INTO  student (fname,birthday,gender,email,phone,password) VALUES('$fname','$birthday','$gender','$email','$phone','$password')");
        
        //display success message
    header("location:table.php");
        echo "<font color='green'>Data added successfully.";


       
    }
        // if all the fields are filled (not empty)             
        //insert data to database
        
        

}

?>
</body>
</html>