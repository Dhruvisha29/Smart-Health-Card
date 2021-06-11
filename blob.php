<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Blob file</title>
</head>
<body>
	<?php
	 $dbh = new PDO("mysql:host=localhost;dbname=iihealth","root","","");
	 if(isset($_POST['upload']))
		{
			$id=$_POST['hc1111_no'];
			$name=$_POST['pname'];
			$date1=$_POST['date'];
			$type=$_FILES['myfile']['type'];
			
			$data=file_get_contents($_FILES['myfile']['tmp_name']);
			$stmt= $dbh->prepare("insert into labrecord values(?,?,?,?,?)");
			$stmt->bindParam(1,$id);
			$stmt->bindParam(2,$name);
			$stmt->bindParam(3,$date1);
			$stmt->bindParam(4,$type);
			$stmt->bindParam(5,$data);
			$stmt->execute();
		}
?>
<form method="post" enctype="multiple/form-data">
	<input type="file" name="nyfile"/>
	<button name="upload">Upload</button>
</form>
</body>
</html>