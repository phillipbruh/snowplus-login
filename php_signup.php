<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'test2';

$con = mysqli_connect($host, $user, $pass, $db);
if($con)
	echo 'Succesful connection';

$name = $_POST['na'];
$age = $_POST['ag'];
$gender = $_POST['ge'];
$phone = $_POST['ph'];
$id = $_POST['ID'];
$password = $_POST['PASS'];
if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid name format"; 
	}
$sql = "insert into tab1 (name,age,gender,phone,id,no,temp) values ('$name', '$age','$gender','$phone','$id','$password',0000)";
$query = mysqli_query($con, $sql);
if($query)
{
	echo '<br>Congraltions !<br> You have sucessfully created your account!';
	echo '<hr><br>Click here to log-in to your account:';
	echo '<input type="button" onclick="log()" value="Log-in">';
}
else
	echo '<br>Data not sent successfully';

?>
<script>
function log() {
    window.open("log_in.html");
}
</script>