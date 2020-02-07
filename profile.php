<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<?php
	    $name= $_GET['name'];
	    $id = $_GET['id'];
	    $batch = $_GET['batch'];

	    echo "ID: ".$id;
	    echo "<br>";
	    echo "Welcome ".$name;
	    echo " from " .$batch;
	?>
</body>
</html>

