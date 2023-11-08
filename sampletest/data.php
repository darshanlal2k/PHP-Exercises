<?php
echo $_POST["name"];
echo "<br>";

echo $_POST["email"];
echo "<br>";

echo $_POST["password"];
echo "<br>";

$name = $_POST["name"]; //darshan
$email = $_POST["email"]; //mail
$pass = $_POST["password"]; //ps

//database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

$connection = mysqli_connect($servername, $username, $password, $database);

if ($connection) {
    echo "avudiyo";
    echo "<br>";
} else {
    echo "avinipaa";
}

//$query = "SELECT * FROM validation WHERE validation.Username = '". $name. "' ,";
//$query_getShows = "SELECT * FROM toho_shows WHERE toho_shows.show =' ". $show. " '";
/*$query ="SELECT `Username`,`Email`,`Password` FROM validation WHERE Username = '$name' AND Email = '$email' AND Password = '$pass'";

$result = mysqli_query($connection,$query);

$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) 
{
    echo "<br>";
    echo "user value is valid";
    echo "<br>";
}
else {
    echo "<br>";
    echo "invalid";
    echo "<br>";
}
if ($num_rows > 0) 
{
    $count = 0;
    while($came = mysqli_fetch_assoc($result))
    {
        if(($name == $came["Username"]) and ($email == $came["Email"]) and ($pass == $came["Password"]))
        {   
           
            echo "<br>";
            echo "user value is valid";
            echo "<br>";
        }
        else 
        {
            $count  = $count + 1;
            if ($num_rows == $count)
            {
                echo "user value doesnot exist";
            }
        }
    }
}*/
?>
