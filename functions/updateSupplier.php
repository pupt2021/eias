<?php 
	include('config.php');

	$messsage = "";
	$error = 0;
	$sid = $_POST['sid'];
	$supplier = $_POST['sname'];
	$supplier_address = $_POST['saname'];

	$query = "UPDATE `tbl_suppliers` SET supplier_name='$supplier', supplier_address='$supplier_address' WHERE supplier_id=$sid";
	$result = $con->query($query);

	if($result){
		$messsage = "Data successfully updated!";
		$error = 1;
		header("location:../supplier.php?messsage=$messsage&&error=$error");
	}else{
		$messsage = "Error Problems";
		$error = 0;
		header("location:../supplier.php?messsage=$messsage&&error=$error");
	}
?>