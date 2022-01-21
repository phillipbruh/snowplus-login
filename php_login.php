<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'test2';

$con = mysqli_connect($host, $user, $pass, $db);
if($con)
	echo 'Succesful connection<br>';
$id = $_POST['ID'];
$password = $_POST['PASS'];
# $qry   = mysql_query("SELECT * FROM tab1 WHERE user='$id'", $con);
$sql = "SELECT * FROM tab1 WHERE id='$id'";
$query = mysqli_query($con, $sql);
if($query)
	$rx = mysqli_fetch_array($query);
	
	if($rx["id"] == $id)
	{
		if($rx["no"] == $password)
		{
			echo 'Login Succcessful';
			echo '<hr><h3>Entered Details</h3>';
			echo 'Name: '. $rx['name']. ' || Age: '. $rx['age']. ' || Gender: '. $rx['gender']. ' || Phone: '. $rx['phone']. ' || ID: '. $rx['id']. ' || Password: '. $rx['no']. '<br>';
		}
		else
		{
			echo 'Wrong password or ID';
		}
	}
	else
	{
		echo '<h3>But.....</h3>Mismatch ID :(';
	}
?>
