
<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "humanplusplus";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "INSERT INTO researchfield Values ('$_GET[field]')";
			$result = $conn->query($sql);
			if(!$result){
				echo "operation not succesful";
			}
			else{
				header( "Location: http://localhost/project_web2018/admin/admin.php" ).scrollTop(1000);
			}

			$conn->close();

			//sleep(2); //2seconds
			//header( "Location: index.php" ).scrollTop(1000);
			//redirect_to("{index.php}{#team}")
?>
