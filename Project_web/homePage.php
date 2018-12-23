
<link rel="stylesheet" type="text/css" href="css/homePage.css">

<body class="yYellow_background" >

<?php 
		include 'header.php';
?>

<br>



<div id="yMainImage">
	<div class="grid-x grid-padding-x">
		<div class="large-12 cell yCenter">
			<img id="yHomeImage" src="HomePage.png">
       <i id="yScroll0"  class="arrow yDown" style="cursor:pointer;"></i>
		</div>
	</div>
	<!--<div class="grid-x grid-padding-x yButtomMargin yTopMargin">
	<div class="large-12 cell yCenter">
	
	</div>
</div>-->

</div>

<br>

<div id="yProjects">

<div class="grid-x grid-padding-x ySideMargins">
  <div class="Latest Projects">
  	 <h4 class="yStandardFont Label_Post">Latest Projects</h4>
  </div>
</div>

<div class="grid-x grid-padding-x ySideMargins yTopMargin">
    <div id="project1" class="large-5 cell yCenter">
    	    	 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="humanplusplus";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql4 ="select DISTINCT (pictures.projectId), project.title,project.description,pictures.picture from pictures inner join project where pictures.projectId=project.id GROUP by pictures.projectId order by project.date DESC" ;
$result = $conn -> query($sql4);
$counter=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	   	                 echo "<div class = 'yCloud'><p class='yStandardFont yCenter yTitle'>".$row["title"]."</p><img class='yCircle' src='".$row["picture"]."'><a href='singlepage.php?rowid=".$row["projectId"]."&type=project'><p class='yStandardFont yCenter black'>Read More ></p></a></div>";


	}
}


?>

    </div>
    <div id="project2" class="large-7 cell yCenter">
  <?php
    	if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	  	      echo "<div class = 'yCloud'><p class='yStandardFont yCenter yTitle'>".$row["title"]."</p><img class='yCircle' src='".$row["picture"]."'><a href='singlepage.php?rowid=".$row["projectId"]."&type=project'><p class='yStandardFont yCenter black'>Read More ></p></a></div>";


	}
}
?>
    </div>
</div>

<div class="grid-x grid-padding-x ySideMargins yTopMargin">
    <div id="project3" class="large-7 cell yCenter">
    	  <?php
    	if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	   	  	                  echo "<div class = 'yCloud'><p class='yStandardFont yCenter yTitle'>".$row["title"]."</p><img class='yCircle' src='".$row["picture"]."'><a href='singlepage.php?rowid=".$row["projectId"]."&type=project'><p class='yStandardFont yCenter black'>Read More ></p></a></div>";


	}
}
?>
    </div>
    <div id="project4" class="large-5 cell">
    	  <?php
    	if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	  	 	  		   	     echo "<div class = 'yCloud'><p class='yStandardFont yCenter yTitle'>".$row["title"]."</p><img class='yCircle' src='".$row["picture"]."'><a href='singlepage.php?rowid=".$row["projectId"]."&type=project'><p class='yStandardFont yCenter black'>Read More ></p></a></div>";

	}
}
?>
    </div>
</div>


<div class="grid-x grid-padding-x yButtomMargin yTopMargin">
	<div class="large-12 cell yCenter">
		<i id="yScroll1"  class="arrow yDown" style="cursor:pointer;"></i>
	</div>
</div>

</div> <!--END OF PROJECTS-->

<!--____________________________________________________________________________________________________________-->

<div id="yBlogs">

<div class="grid-x grid-padding-x ySideMargins">
  <div class="large-12 cell">
  	<h4 class="yStandardFont Label_Post">Latest Blogs</h4>
  </div>	
</div>

<div class="grid-x grid-padding-x ySideMargins">

	    <div  class="blog1 large-3 cell yCenter">
    	 <?php

$sql1 ="SELECT title, picture, content,id FROM post WHERE type='blog' order by date desc" ;
$result = $conn -> query($sql1);
$counter1=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	  echo " <img src=" . $row["picture"] . ">";
    $counter1=1;
	}
}


?>
    </div>

    <div class="blog1 large-3 cell yCenter">
           <?php
           if($counter1==1){
                	echo "<div class='yTalkBubble ySideMargins yTopMargin  yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] . "</p><br>" . substr
      	($row["content"],0,150). "<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";}
         ?>
<!--yTopMargin yButtomMargin ySideMargins yLeftMargin -->
    </div>

	    <div class="blog2 large-3 cell yCenter">
    	 <?php
       $counter2=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	  echo " <img src=" . $row["picture"] . ">";
   $counter2=1;
	}
}


?>
    </div>

    <div class="blog2 large-3 cell yCenter">
           <?php
               if($counter2==1){   echo "<div class='yTalkBubble ySideMargins yTopMargin  yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] . "</p><br>" . substr
        ($row["content"],0,150). "<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";}
         ?>
<!--yTopMargin yButtomMargin ySideMargins yLeftMargin -->
    </div>
</div>

<div class="grid-x grid-padding-x ySideMargins">
	    <div class="blog3 large-3 cell yCenter">
    	 <?php
       $counter3=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	  echo " <img src=" . $row["picture"] . ">";
$counter3=1;
	}
}


?>
    </div>

    <div class="blog3 large-3 cell yCenter">
           <?php
            if($counter3==1){      echo "<div class='yTalkBubble ySideMargins yTopMargin  yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] . "</p><br>" . substr
        ($row["content"],0,150). "<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";}
         ?>
<!--yTopMargin yButtomMargin ySideMargins yLeftMargin -->
    </div>


	    <div class="blog4 large-3 cell yCenter">
    	 <?php
       $counter4=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	  echo " <img src=" . $row["picture"] . ">";
$counter4=1;
	}
}


?>
    </div>

    <div class="blog4 large-3 cell yCenter">
           <?php
            if($counter4==1){      echo "<div class='yTalkBubble ySideMargins yTopMargin  yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] . "</p><br>" . substr
        ($row["content"],0,150). "<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>"; }
         ?>
<!--yTopMargin yButtomMargin ySideMargins yLeftMargin -->
    </div>
</div>


    <div class="grid-x grid-padding-x yButtomMargin yTopMargin">
	<div class="large-12 cell yCenter">
		<i id="yScroll2"  class="arrow yDown" style ="cursor:pointer;"></i>
	</div>
</div>

</div> <!--END OF NEWS-->


<!--____________________________________________________________________________________________________________-->


<div id="yEvents">

<div class="grid-x grid-padding-x ySideMargins">
	<div class="large-12 cell">
		<h4 class="yStandardFont Label_Post">Latest Events</h4>
	</div>	
</div>

<div class="grid-x grid-padding-x ySideMargins">

	    <div id="event1" class="large-6 cell yCenter">
    	 <?php

$sql2 ="SELECT title, picture, content,id FROM post WHERE type='event' order by date desc" ;
$result = $conn -> query($sql2);
$counter=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
                	echo "<div class='yTv  yTopMargin ySideMargins yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}


?>
    </div>



<!--yTopMargin yButtomMargin ySideMargins yLeftMargin -->


    <div id="event2" class="large-6 cell yCenter">
  <?php
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
               	echo "<div class='yTv yTopMargin ySideMargins yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}
?>
<!--yTopMargin yButtomMargin ySideMargins yLeftMargin -->
    </div>
</div>


<div class="grid-x grid-padding-x ySideMargins">
	    <div id="event3" class="large-6 cell yCenter">
	    	<?php
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
               	echo "<div class='yTv yTopMargin ySideMargins yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}
?>
    </div>


    <div id="event4" class="large-6 cell yCenter">
    	<?php
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
               	echo "<div class='yTv  yTopMargin ySideMargins yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}
?>
</div>
</div>

   <div class="grid-x grid-padding-x yButtomMargin yTopMargin">
	<div class="large-12 cell yCenter">
		<i id="yScroll3"  class="arrow yDown" style="cursor:pointer;"></i>
	</div>
</div>

</div> <!--END OF EVENTS-->

<!--____________________________________________________________________________________________________________-->

<div id="yNews">
	<div class="grid-x grid-padding-x">
		<div class="large-12 cell">
		  <h4 class="yStandardFont Label_Post">Latest News</h4>	
		</div>
	</div>

<div class="grid-x grid-padding-x ySideMargins">
    <div cid="news1" class="large-6 cell yCenter">
    	 <?php

$sql2 ="SELECT title, picture, content,id FROM post WHERE type='news' order by date desc" ;
$result = $conn -> query($sql2);
$counter=0;
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
                	echo "<div class='yFlag  yTopMargin ySideMargins2 yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}


?>
    </div>
    <div id="news2" class="large-6 cell yCenter ">
    	<?php
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
               	echo "<div class='yFlag  yTopMargin ySideMargins2 yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}
?>
    </div>
</div>

<div class="grid-x grid-padding-x ySideMargins">
    <div id="news3" class="large-6 cell yCenter">
    	<?php
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
               	echo "<div class='yFlag  yTopMargin ySideMargins2 yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}
?>
    </div>
    <div id="news4" class="large-6 cell yCenter">
    	<?php
if($result->num_rows > 0)
{
	if($row=$result->fetch_assoc() ){
	 
           
               	echo "<div class='yFlag  yTopMargin ySideMargins2 yStandardFont whiteFont'>" . "<p class='yTitle'>" . $row["title"] ." </p><img class='imgEvents' src=" . $row["picture"] . ">". "<br>" . substr
      	($row["content"],0,150). "...<a href='singlepage.php?rowid=".$row["id"]."&type=post'><p class='yStandardFont yTitle'>Read More ></p></a></div>";
         
	}
}
?>
    </div>
</div>



	   <div class="grid-x grid-padding-x yButtomMargin yTopMargin">
	<div class="large-12 cell yCenter">
		<i id="yScroll4"  class="arrow yUp" style="cursor:pointer;"></i>
	</div>
</div>
</div>  <!--END OF NEWS-->


<!--______________________________________________________________________________________________________________-->

     <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="js/homePage.js"></script>
  
  <?php 
    include 'footer.php';
  ?>

