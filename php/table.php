<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
$sql="CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    emailid VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if($conn->query($sql)==TRUE){
    echo "Table created sucessfully";
}
else{
    echo "Error creating table:".$conn->error;
}

$conn->close();
?>

