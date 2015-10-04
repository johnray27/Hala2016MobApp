<?php

	include("config.php");
	
	 
		$province = $_POST["province"];
		$presidentid = $_POST["presidentid"];
	
	$sql = "Insert into tbl_votes (id, President_id, fld_provinces) values (null, '".$presidentid."', '".$province."')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo "success";
	}
	else{
		echo "fail";
	}
?>