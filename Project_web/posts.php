<?php include("header.php") ?>	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
     
<link rel="stylesheet" type="text/css" href="styleP.css">

<div class="row" style="float: none; text-align:center; width: 70%;
	margin:auto;">
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



$typeOfthePost = $_GET['typeoftheblog'];
$sql = "SELECT content,picture,title,id,type From post Where type='".$typeOfthePost."'ORDER BY id DESC";



$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//echo "<p>".$row['content']."</p>";
        echo "<div class='col-lg-12 col-sm-12'>
  
                  <div class='w3-card-4 w3-margin '>".
			
			"<img src='".$row['picture']."'"."style='width:100%'>".
			"<div class='w3-container'>".
			"<h3><b>".$row['title']."</b></h3>".
			//"<p>".$row['content']."</p>".
			 "</div>".
			"<div class='w3-card-4 w3-margin '>
             <a href='singlepage.php?rowid=".$row["id"]."&type=post"."'><p><b>READ MORE »</b></p></a>
             </div>".
			 
			           "</div>".
			"<hr>".
			"</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
   
  </div> 
<?php include("footer.php") ?>