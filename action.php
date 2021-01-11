<?php
	
	include "connection.php";

	//post content
	if(isset($_POST['submit'])){
		$content = $_POST['content'];

		$qry = "INSERT INTO tbl_post (content) VALUES ('$content') ";
		// $data = mysqli_query($conn, $qry) or die(mysqli_error());
		$data = $conn->query($qry) or die(mysqli_error());

	}

	//delete post
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		// echo $id;
		$qry = "DELETE FROM tbl_post WHERE id = $id";
		$data = $conn->query($qry) or die(mysqli_error());
		header("location: index.php");
	}
	

?>