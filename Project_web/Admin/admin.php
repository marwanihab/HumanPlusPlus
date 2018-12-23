<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
			<link rel="stylesheet" type="text/css" href="css/app.css">
			<link rel="stylesheet" type="text/css" href="css/foundation.css">
			<link rel="stylesheet" type="text/css" href="css/DahliaCSS.css">
</head>
<body style = "background-image: url('human.png');background-repeat: no-repeat;">


<div class="grid-x grid-padding-x" style = "padding-top:10%">
  <div class="medium-2 small-2 large-2 cell" style = "height:100%">
    <ul class="vertical tabs" data-tabs id="example-tabs">
      <li class="tabs-title Dtabs"><a href="#panel1v" aria-selected="true"><p class ="Dtabs1">Add Project</p></a></li>
      <li class="tabs-title Dtabs"><a href="#panel2v"><p class ="Dtabs1">Add team member</p></a></li>
      <li class="tabs-title Dtabs"><a href="#panel3v"><p class ="Dtabs1">Add Blog</p></a></li>
      <li class="tabs-title Dtabs"><a href="#panel4v"><p class ="Dtabs1">Add Event</p></a></li>
      <li class="tabs-title Dtabs"><a href="#panel5v"><p class ="Dtabs1">Add News</p></a></li>
      <li class="tabs-title Dtabs"><a href="#panel6v"><p class ="Dtabs1">Add Research Field</p></a></li>
    </ul>
  </div>

  <div class="medium-10 small-10 large-10 cell">

    <div class="tabs-content" data-tabs-content="example-tabs">

<!-- -----------------------------------------------project-------------------------------------------------------------------------- -->

      <div class="tabs-panel" id="panel1v">		
        <p Class = "Dpanels" style = "text-align: center; font-size: 130%">Add New Project</p>
        <form action="Addproject.php" method="get">
			Title:  <input type="text" name="title">
			Fields of research for the project: <fieldset class="small-12 columns">
				<ul class="menu vertical">
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

						$sql = "SELECT name FROM researchfield";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						     	$select = "<li><input type='checkbox' name='Fields[]' value='" .$row['name']."'><label>".$row['name']."</label></li>";
						     	 echo $select;
								}
				
						    }

						$conn->close();
					?> 
					 </ul>
					</fieldset>
			     
			description : <input type="text" name="description">
			Video Link:  <input type="text" name="video" placeholder = "The video should be in the format: .mp4">
			image:  <input type="text" name="image" placeholder = "Please specify the image path here, if more than 1 image please seperate them using (,)" >
			Choose Members:  (member---field of research)<fieldset class="small-12 columns">
				<ul class="menu vertical">
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

						$sql = "SELECT name,fieldsOfResearch,researcherID FROM teammembers";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						     	$select = "<li><input type='checkbox' name='Members[]' value='" .$row['researcherID']."'><label>".$row['name']."---" .$row['fieldsOfResearch']."</label></li>";
						     	 echo $select;
								}
				
						    }

						$conn->close();
					?> 
					 </ul>
					</fieldset>
			     
		  
			<input type="submit" name="ADD">
		</form>
      </div>

<!-- -----------------------------------------------team member-------------------------------------------------------------------------- -->

      <div class="tabs-panel" id="panel2v">
      <p Class = "Dpanels" style = "text-align: center; font-size: 130%">Add New Team Member</p>
      <form action="Addmember.php" method="get">
			Name: <input type="text" name="name"><br>
			Title: <input type="text" name="title"><br>
			Picture of the Member:<input type="text" name="picture"><br>
			Field Of Research: <input list="fields" name="field">
				<datalist id="fields">    
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

					$sql = "SELECT  name FROM researchfield";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					     	$select ="<option value=".$row['name'].">";
					     	 echo $select;
							}
			
					    }

					$conn->close();
				?> 
				</datalist> 
				<br> <br>

			<input type="submit" value = "ADD Member">
		</form>
      </div>

<!-- -----------------------------------------------Blog-------------------------------------------------------------------------- -->
      <div class="tabs-panel" id="panel3v">		
        <p Class = "Dpanels" style = "text-align: center; font-size: 130%">Add New Blog</p>
        <form action="Addblog.php" method="get">
			Title: <input type="text" name="title"><br>
			Content: <input type="text" name="content"><br>
			Attach a picture:<input type="text" name="picture"><br>
			<input type="submit" value = "ADD Blog">
		</form>
      </div>

<!-- -----------------------------------------------Event-------------------------------------------------------------------------- -->
      <div class="tabs-panel" id="panel4v">		
        <p Class = "Dpanels" style = "text-align: center; font-size: 130%">Add New Event</p>
        <form action="Addevent.php" method="get">
        	Title: <input type="text" name="title"><br>
			Content: <input type="text" name="content"><br>
			Attach a picture:<input type="text" name="picture"><br>
			<input type="submit" value = "ADD Event">
		</form>
      </div>

<!-- -----------------------------------------------News-------------------------------------------------------------------------- -->
      <div class="tabs-panel" id="panel5v">		
        <p Class = "Dpanels" style = "text-align: center; font-size: 130%">Add News</p>
        <form action="Addnews.php" method="get">
        	Title: <input type="text" name="title"><br>
			Content: <input type="text" name="content"><br>
			Attach a picture:<input type="text" name="picture"><br>
			<input type="submit" value = "ADD News">
			</form>
      </div>

   
<!-- -----------------------------------------------Research Fields---------------------------------------------------------------------- -->   <div class="tabs-panel" id="panel6v">
        <p Class = "Dpanels" style = "text-align: center; font-size: 130%">Add New Research Field</p>
        <form action="Addfield.php" method="get">
			New Field: <input type="text" name="field">
			<input type="submit" name="ADD" value = "ADD">
		</form>


      </div>

    </div>
  </div>
</div>

	<script src="js/vendor/jquery.js"></script>
			<script src="js/vendor/foundation.js"></script>
			<script src="js/vendor/what-input.js"></script>
			<script src="js/app.js"></script>
</body>
</html>