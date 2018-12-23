
	<?php
	include 'header.php';
	?>

	<link rel="stylesheet" href="css//singlepage.css">

	<?php
		$conn = mysqli_connect("localhost", "root", "", "humanplusplus");
		$id = $_GET['rowid'];
		$type = $_GET['type'];
		// $id = 1;
		// $type = "project";
		if($type == "project")
		{
			$query = "select picture from pictures where projectId = " .$id."";
		}
		else{
			$query = "select picture from post where id = " .$id."";
		}
		$result = mysqli_query($conn, $query);
		if($result == true)
		{
		$row = $result->fetch_assoc();
		$name = $row['picture'];
		echo "<div class='rparallax' style = 'background-image: url(" , $name,");'></div>";
	}
	?> 



<div class="row">
<div class="columns small-2 medium-6 large-12" class="rdiv">
	<div class = "rbody" style = ''>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "humanplusplus");
		$id = $_GET['rowid'];
		$type = $_GET['type'];
		// $id = 1;
		// $type = "project";

		

		if($type == "project")
		{	
			$query = "select title from project where id = " .$id."";
		}
		else
		{
			$query = "select title from post where id = " .$id."";
		}
		$result = mysqli_query($conn, $query);
		$result = mysqli_query($conn,  $query);
		$row = $result->fetch_assoc();
		echo "<h3 class = 'rheader' style = ''>","{$row['title']}","</h3>";

		if($type == "project")
		{
			echo "<div class='grid-x grid-padding-x'>
  		         <div class='medium-12 small-12 large-8 cell' style = 'height:auto'>";
					$query = "select description from project where id = " .$id."";
					$result = mysqli_query($conn, $query);
					$row = $result->fetch_assoc();
					echo "<p class = 'rparg'>","{$row['description']}","</p>";
			echo "</div>";

			echo "<div class='medium-12 small-12 large-4 cell' >";
					$query = "select videoLink from project where id = " .$id."";
					$result = mysqli_query($conn, $query);
					if($result) {
						echo "<p style = 'font-weight:900; font-size:25px'> Related video <br></p>";
				   	 	while($row = mysqli_fetch_row($result)){
				    		$video = $row[0];
				    		if($video)
							echo "<div><video width='320' controls> <source src=$video type='video/mp4'> </video></div>";
				    }
				}
			echo "</div>";
			echo "</div>";
		}
		else
		{
			$query = "select content from post where id = " .$id."";
			$result = mysqli_query($conn, $query);
			$row = $result->fetch_assoc();
			echo "<p class = 'rparg'>","{$row['content']}","</p>";
		}
		
		
		echo "<div  style = 'text-align:center;' >";
		if($type == "project")
		{
			$query = "select picture from pictures where projectId = " .$id."";
			$result = mysqli_query($conn, $query);
			if($result == true)
			{
				echo "<p style = 'font-weight:900; font-size:25px'> More Pictures <br></p>";
				$counter = 0;
				while($row = $result->fetch_assoc())
				{	
				$name = $row['picture'];
					if($counter > 0)
					{
						echo "<div style = 'text-align:center;display:inline-block;margin-left:2.5%; width:10%;'><img src='$name' > </div>";
					}
					$counter++;
				}
			}
		echo "</div> <br>";

		echo "<div style = 'margin:auto;text-align:center;'>";
		$query = "select distinct teammembers.name , teammembers.researcherId from teammembers inner join researcher where projectId = " .$id."";
		$result = mysqli_query($conn, $query);
		$query2 =  "select teammembers.picture from teammembers inner join researcher where researcher.projectId = " .$id." and teammembers.researcherID= researcher.researcherId";
		$result2 = mysqli_query($conn, $query2);
		echo "<div class = 'rteam' style = 'display:inline-block;margin:auto;'>";
		echo "<p style = 'font-weight:900; font-size:25px'> Team members <br></p>";

		if($result) {
		    while($row = mysqli_fetch_row($result)){
		    	if($rows = mysqli_fetch_row($result2))
		    	{
		    		$image = $rows[0];
		    		$name = $row[0];
		    		$pid = $row[1];
    				echo "<div style = 'text-align:center;display:inline-block; margin:auto; width:10%; '><img src='$image' class = 'rimg'> <p> $name</p></div>";
		    	}
		        }
		    }
			
		    echo "</div>";
		  echo "</div>";


	
		}
			
		?>

	</div>
</div>
</div>


<script src="js/vendor/jquery.js"></script>
	
	<?php
	include 'footer.php';
	?>



