<?php
echo "hi";
$darname = $_POST["name"];
echo"$darname";
echo"$darname";echo"$darname";



$daremail = $_POST["email"]; 
echo "<br>";
?>
welcome vishnu bhai<br>
<?php echo $_POST["name"]; ?><br>
<?php echo $_POST["email"]; ?>



<?php
echo "darshanuygkj";
$servername = "localhost";
$username = "root";
$password = "";
$db="irctc";


$con = mysqli_connect($servername,$username,$password,$db);

if ($con){
  echo "<br>";
  echo("came");
}
else{
  echo("not came");
}

$query = "select * from Total";

$result = mysqli_query($con, $query);

$num_rows = mysqli_num_rows($result);

echo "<br>";
print_r($num_rows);

if($num_rows > 0)
{
  while( $one = mysqli_fetch_assoc($result))
  {
    echo "<br>";
    echo $one['id'];
    echo $one['Start'];
    echo $one['Trainname'];
    echo $one['End'];
    echo $one['Seats'];
    echo "</br>";
  }  
}
else{
  echo "varla";
}

?>
