

<?php
session_start();



$number = $_GET['number'];
$conn=mysqli_connect('localhost','u148781541_chemf','Chemfluence2019','u148781541_stud');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM students WHERE number = $number"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: http://chemfluence.in/chemadmin/index.php'); 
    exit;
} else {
    echo "Error deleting record";
} ?>