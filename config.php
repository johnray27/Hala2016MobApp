<?php

$server = "localhost";
$user = "gcccsorg_halalan";
$pass = "Aa0987654321";

$conn = mysqli_connect($server, $user, $pass);

if(!$conn){
	echo "not connected";
}else{
	mysqli_select_db($conn, "gcccsorg_halatest2016");
	}

?>