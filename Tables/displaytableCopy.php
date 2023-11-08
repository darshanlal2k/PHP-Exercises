<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "validation";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "select * from details";

$result = mysqli_query($conn,$sql);

$newrow = mysqli_num_rows($result);

if($newrow > 0){
        echo '<table class="table">';
        echo "<tr>";
        echo "<th>ID";
        echo "<th>Firstname";
        echo "<th>Lastname";
        echo "<th>Age";
        echo "<th>Email";
        echo "<th>Contact";
        echo "<th>Gender";
        echo "<th>Address";
        echo "<th>Course";
        echo "<th>District";
        echo "<th>State";
        echo "</tr>";
    
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" .$row["Id"];
        echo "<td>" .$row["FirstName"];
        echo "<td>" .$row["LastName"];
        echo "<td>" .$row["Age"];
        echo "<td>" .$row["Email"];
        echo "<td>" .$row["Contact"];
        echo "<td>" .$row["gender"];
        echo "<td>" .$row["Delivery"];
        echo "<td>" .$row["Course"];
        echo "<td>" .$row["District"];
        echo "<td>" .$row["State"];
        echo "</tr>";
    }
}
else{
    echo "not came";
}

?>
<style>

.table,.table td,.table th{
    border: 3px solid blue;
    padding: 5px;
    border-collapse: collapse;
    font-size: 20px;
}
.table{
    width: 80%;
    margin: auto;
}
.table td{
    background-color: red;
    color: white;
}
.table th{
    background-color: yellow;
}

</style>