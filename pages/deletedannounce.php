<?php
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		
		include 'dbconnect.php';
		
		
		$qry = "delete from announce where id=$id";
		$servername = "localhost";
		$uname = "root";
		$pass = "";
		$db = "secyear";
		
		$conn = mysqli_connect($servername, $uname, $pass, $db);
		$result = mysqli_query($conn, $qry);
		
		if ($result) {
			echo "DELETED";
			header('Location:deleteannouncement.php');
		} else {
			echo "ERROR!!";
		}
	}
?>