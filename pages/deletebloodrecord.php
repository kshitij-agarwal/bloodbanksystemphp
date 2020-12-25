<?php
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		
		include 'dbconnect.php';
		
		
		$qry = "delete from blood where id=$id";
		$servername = "localhost";
		$uname = "root";
		$pass = "";
		$db = "secyear";
		
		$conn = mysqli_connect($servername, $uname, $pass, $db);
		$result = mysqli_query($conn, $qry);
		
		if ($result) {
			echo "DELETED";
			header('Location:deleteblood.php');
		} else {
			echo "ERROR!!";
		}
	}
?>