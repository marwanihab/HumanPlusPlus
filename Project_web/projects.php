
<?php include("header.php") ?>	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css//style.css">



<div class="row sort" style="margin-right:0px;margin-left:0px;">
	<div class="col-lg-12 col-sm-12">
<p>Sort Using Desired Research Field below:</p>
	</div>
</div>

<div class="row tags"style="margin-right:0px;margin-left:0px;">
<div class="col-lg-12 col-sm-12">

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

$sql = "SELECT distinct fieldsOfResearch FROM fields";

$result = $conn->query($sql);

$i=0;	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//$flag=true;
		
		$name=$row["fieldsOfResearch"];
        echo "<a href='projectTags.php?tag=".$name."'>".$name."</a>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>
</div>


<div class="container" style="margin-top: 10px;">
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

	


	

$sql = "SELECT Distinct id,picture, title, description,videoLink FROM pictures  JOIN project ON pictures.picture= ( select picture From pictures where projectId=project.id LIMIT 1)ORDER BY id DESC";

	




$result = $conn->query($sql);


	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='singlepage.php?rowid=".$row["id"]."&type=project"."'><div class='MprojectImg ' >
		 
		 
		 <img src=". $row["picture"]."".
			">".
			"<div class='Moverlay'>
             <div class='text'>". $row["title"]."</div>
          </div>".
			
			
			
			
			"</div></a>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</div>


<?php include("footer.php") ?>