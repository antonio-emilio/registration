<?php
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = pg_escape_string($username);
$password = pg_escape_string($password);

pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=ZEBRONICS");

$result = pg_query("select * from stud where username = '$username' and password = '$password'") or die("failed to query database".pg_result_error());
$row = pg_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
	echo "login successful welcome".$row['username'];
}else{
	echo "failed to login!";
}

?>