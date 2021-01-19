<?php
header('Content-Type:application/json');
	require 'connect.php';
	$id = $_GET["id"];
	$role = $_GET["role"];
	$sql = "SELECT * FROM `student` WHERE `number` = $id";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	$arr = array('code' => 200, 'msg' => "success","data"=>array('id'=>$row['id'],'name'=>$row['name'],'time'=>$row['time']));
	echo json_encode($arr);
	$time = time();
	if ($role==0) {
		$sql = "UPDATE `demo`.`student` SET `time` = $time WHERE `student`.`id` = $id";
		if (mysqli_query($conn,$sql)) {}
	}
	mysqli_close($conn);
?>
