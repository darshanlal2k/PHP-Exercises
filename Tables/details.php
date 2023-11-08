<?php
$Fname = $_POST["fname"];
$Lname = $_POST["lname"];
$Age = $_POST["age"];
$Email = $_POST["email"];
$Contact = $_POST["phone"];
$Delivery = $_POST["delivery"];
$Gender = $_POST["gender"];
$Course = $_POST["course"];
$State = $_POST["state"];
$District = $_POST["district"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "validation";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "INSERT INTO details (FirstName, LastName, Age, Email, Contact, Delivery, gender, Course, District, State) VALUES ('$Fname','$Lname', $Age, '$Email',$Contact,'$Delivery','$Gender','$Course','$District','$State')";

if(mysqli_query($conn,$sql))
{
    echo file_get_contents("index.html");
}
else{
    echo"got error.".mysqli_error($conn);
}


mysqli_close($conn);
