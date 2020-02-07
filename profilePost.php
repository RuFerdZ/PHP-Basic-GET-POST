<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<?php
	    $name= $_POST['name'];
	    $id = $_POST['id'];
	    $batch = $_POST['batch'];

	    echo "ID: ".$id;
	    echo "<br>";
	    echo "Welcome ".$name;
	    echo " from " .$batch;
	?>
</body>
</html>

