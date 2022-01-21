<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'test2';

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con)
	echo 'Unsuccesful connection';
$password = $_POST["PASS"];
if($password == "admin")
{
$sql = "SELECT * FROM tab1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($rx = mysqli_fetch_assoc($result))
	{
		echo '<br>';
		echo 'Name: '. $rx['name']. ' || Age: '. $rx['age']. ' || Gender: '. $rx['gender']. ' || Phone: '. $rx['phone']. ' || ID: '. $rx['id']. ' || Password: '. $rx['no']. '<br>';
	}
}

else {
    echo "0 results";
}
}
else
{
echo 'wrong admin password';
}