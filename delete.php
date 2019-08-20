<?php 

include_once 'conn.php';
$email = $_GET['email'];
echo "$email";
// Check mysqliection
if (!$mysqli) {
    die("mysqliection failed: " . mysqli_mysqliect_error());
}

// sql to delete a record
$sql = "DELETE FROM student WHERE email = '$email'"; 

if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header('Location: table.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>