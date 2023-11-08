<div class="parent">
    <div class="child">
        <label class="childname">Name : </label>
        <input type="text" id="findtext" class="findtext" value="">
        <button class="classsubmit" id="submitbtn">Submit</button>
    </div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "validation";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from details";

$result = mysqli_query($conn, $sql);

$newrow = mysqli_num_rows($result);

if ($newrow > 0) {
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

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Id"];
        echo "<td>" . $row["FirstName"];
        echo "<td>" . $row["LastName"];
        echo "<td>" . $row["Age"];
        echo "<td>" . $row["Email"];
        echo "<td>" . $row["Contact"];
        echo "<td>" . $row["gender"];
        echo "<td>" . $row["Delivery"];
        echo "<td>" . $row["Course"];
        echo "<td>" . $row["District"];
        echo "<td>" . $row["State"];
        echo "</tr>";
    }
}
else {
    echo "not came";
}

/*$myPhpVar = $_COOKIE['myJavascriptVar'];
    echo $myPhpVar;
    $variable = 'asdfghjkl';
    $complex=array('demo','text',array('foo','bar'));
    $robo = array(
        'qwe' => 'asd',
        'name' =>$myPhpVar,
        'row' => array(
            'firstname' => 99,
            'lastname' => $row['Firstname'],
        ),
        'asd' => array(
            1 => 2,
            3 => 4,
        ),
        'zxc' => 0,
    );
    echo ($robo["asd"]["1"]);
    echo ($robo["asd"]["3"]);
    echo ($robo["zxc"]);
?>
<script>
    var btn = document.getElementById("submitbtn");
    var text = document.getElementById("findtext");
    var value = text.value;
    btn.onclick = function() {
    
    }
var zxcv = '<?php  echo $variable;?>';


var complex =<?php echo json_encode($complex);?>;
    
    var myJavascriptVar = text.value;
    document.cookie = "myJavascriptVar = " + myJavascriptVar
    <?php $myPhpVar = 'myJavascriptVar'; ?>

    var data = <?php echo json_encode($robo); ?>;

</script>*/
?>
<style>
    .table,.table td,.table th {
        border: 3px solid blue;
        padding: 5px;
        border-collapse: collapse;
        font-size: 20px;
    }
    .table {
        width: 80%;
        margin: auto;
    }
    .table td {
        background-color: red;
        color: white;
    }
    .table th {
        background-color: yellow;
    }
    .parent {
        width: 80%;
        margin: 30px auto;
        background-color: green;
        padding: 20px;
        display: flex;
        color: white;
    }
    .child {
        width: 50%;
        margin: 0 auto;
    }
    .childname {
        font-size: 30px;
    }
    .findtext {
        height: 30px;
        width: 50%;
        margin: 0 20px;
    }
    .classsubmit {
        background-color: black;
        color: white;
        height: 30px;
        font-size: 18px;
        border: 1px solid black;
        border-radius: 5px;
        width: 15%;
    }
</style>

