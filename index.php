<?php include "action.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP recall</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="content" placeholder="Say Something">
		<input type="submit" name="submit">
	</form>

	<div>
		<?php include 'connection.php'; 
		
			$qry = "SELECT * FROM tbl_post";
			// $data = mysqli_query($conn, $qry);
			$data = $conn->query($qry) or die(mysqli_error());

			if($data->num_rows > 0){
				while($row = $data->fetch_assoc()){
					
				
		?>
		<p><?= $row['content'] ?>
			<a href="action.php?delete=<?= $row['id']?>">Delete</a>
		</p>

		<?php 
				}
			} else {
				$result = 'no result';
			}

		?>
	</div>
</body>
</html>

