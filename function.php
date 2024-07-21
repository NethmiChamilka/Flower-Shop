
<?php
include 'db.php';
$name = $_POST["name"];
$email = $_POST["Email"];
$subject=$_POST['subject'];
$message=$_POST['message'];
$conn = mysqli_connect("localhost", "root", "", "register") or die("connection failed");
$sql = "INSERT INTO contact(name, email, subject, message ) VALUES ('{$name}','{$email}','{$subject}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: index.php");
mysqli_close($conn);
?>
