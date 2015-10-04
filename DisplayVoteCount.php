<?php 
include("config.php");
	
session_start();

$presidentid = $_GET["txtselectcandidate"];

$querybataan = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Bataan'";
$querypampanga = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Pampanga'";
$queryaurora = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Aurora'";
$querytarlac = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Tarlac'";
$querybulacan = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Bulacan'";
$querynueva = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Nueva Ecija'";
$queryzambales = "SELECT * FROM tbl_votes WHERE President_id = '" .$presidentid. "' and fld_provinces = 'Zambales'"; 


$resultbataan = mysqli_query($conn,$querybataan) or die (mysqli_error($conn));
$resultpampanga = mysqli_query($conn,$querypampanga) or die (mysqli_error($conn));
$resultaurora = mysqli_query($conn,$queryaurora) or die (mysqli_error($conn));
$resulttarlac = mysqli_query($conn,$querytarlac) or die (mysqli_error($conn));
$resultbulacan = mysqli_query($conn,$querybulacan) or die (mysqli_error($conn));
$resultnueva = mysqli_query($conn,$querynueva) or die (mysqli_error($conn));
$resultzambales = mysqli_query($conn,$queryzambales) or die (mysqli_error($conn)); 


$countbataan = mysqli_num_rows($resultbataan);
$countpampanga = mysqli_num_rows($resultpampanga);
$countaurora = mysqli_num_rows($resultaurora);
$counttarlac = mysqli_num_rows($resulttarlac);
$countbulacan = mysqli_num_rows($resultbataan);
$countnueva = mysqli_num_rows($resultnueva);
$countzambales = mysqli_num_rows($resultzambales); 


echo $_GET['callback']."(".json_encode(array("countbataan"=>$countbataan,
"countpampanga"=>$countpampanga,
"countaurora"=>$countaurora,
"counttarlac"=>$counttarlac,
"countbulacan"=>$countbulacan,
"countnueva"=>$countnueva,
"countzambales"=>$countzambales)).");";
?>