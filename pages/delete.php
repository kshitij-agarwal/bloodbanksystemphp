<?php
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		
		include 'dbconnect.php';
		
		
		$qry = "delete from donor where id=$id";
		$servername = "localhost";
		$uname = "root";
		$pass = "";
		$db = "secyear";
		
		$conn = mysqli_connect($servername, $uname, $pass, $db);
		$result = mysqli_query($conn, $qry);
		
		if ($result) {
			echo "DELETED";
			header('Location:deleteview.php');
		} else {
			echo "ERROR!!";
		}
	}
?>