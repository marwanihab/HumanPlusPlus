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

			$queryAddProject = "INSERT INTO project (title,description,videoLink) Values ('$_GET[title]','$_GET[description]','$_GET[video]')";
			$resultProject = $conn->query($queryAddProject);


			$queryGetId = "SELECT id from project  where title='$_GET[title]' and description = '$_GET[description]' and videoLink = '$_GET[video]'";
			$resultProject = $conn->query($queryGetId);
			$ID1 = $resultProject->fetch_assoc();
			$ID2 = $ID1[id];
			

			$arrayF = $_GET[Fields];
			//echo gettype($arrayFields);
			for($i =0;$i<count($arrayF);$i++){
				$itemF = $arrayF[$i];
				$queryAddField = "INSERT INTO fields (projectId,fieldsOfResearch) Values ('$ID2','$itemF')";
				$resultField = $conn->query($queryAddField);
			}


			$images = $_GET[image];
			$array = explode(",",$images); //to split on the (,)
			for($i = 0;$i<count($array);$i++){
				$item = $array[$i];
				//echo gettype($ID);
				//$strFromArr = serialize($item);
				//echo gettype($item)."<br>";
				//echo "<li>$item</li>";

				$queryPictures = "INSERT INTO pictures (projectId,picture) values ('$ID2','$item')";
				$resultPictures = $conn->query($queryPictures);
			}

			//$queryAddMember = "INSERT INTO researcher (projectId,name,researcherId) Values ('$_GET[title]','$_GET[description]','$_GET[video]')";
			//$resultMember = $conn->query($queryAddProject);

			$arrayMember = $_GET[Members];
			//echo gettype($arrayMember);
			for($i =0;$i<count($arrayMember);$i++){
				$itemM = $arrayMember[$i];
				$queryAddMember = "INSERT INTO researcher (projectId,name,researcherId) Values ('$ID2','default','$itemM')";
				$resultMember = $conn->query($queryAddMember);
			}
		

			if($resultProject && $resultPictures && $resultMember && $resultField){
				header( "Location: http://localhost/project_web2018/admin/admin.php" ).scrollTop(1000);
			}
			else{
				echo "operation not succesful";
			}
			$conn->close();

?>
