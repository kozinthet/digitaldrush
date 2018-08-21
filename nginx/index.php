<html>
	<head>
		
	</head>
	<body>
		<?php
		$servername = "drupal";
		$username = "root";
		$password = "AppleSucks";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=drupal", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully"; 
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }
		?>
	</body>
</html>