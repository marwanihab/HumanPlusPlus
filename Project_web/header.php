<html>
<head>
	   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	   <link rel="stylesheet" href="css/foundation.css">
     <link rel="stylesheet" href="css/app.css">
     <link rel="stylesheet" href="h.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

<body>

<div class="grid-x grid-padding-x" id="myHeader">
	<div class="large-7 medium-6 small-6 cell" style="margin-top: 3px;">
    <img src="bitmap.png" width="50px" height="50px" >
	</div>
 
	<div class="large-1 medium-1 small-1 cell " style="margin-top: 3px;">
	<a href="homePage.php" class="fa fa-home" title="Home" id="nsymbol">
	</a>
	</div>

	<div class="large-1 medium-1 small-1 cell" style="margin-top: 8px;">
	<a href="projects.php" class="active" id="nprojects">Projects</a>
	</div>

	<div class="large-1 medium-1 small-1 cell" style="margin-top: 8px;">
	<a href="posts.php?typeoftheblog=blog" class="active" id="nblogs">Blogs</a>
   	</div>

   	<div class="large-1 medium-1 small-1 cell" style="margin-top: 8px;">
	<a href="posts.php?typeoftheblog=news" class="active" id="nnews">News</a>
   	</div>

   	<div class="large-1 medium-1 small-1 cell" style="margin-top: 8px;">
	<a href="posts.php?typeoftheblog=event" class="active" id="nevents">Events</a>
   	</div>	

    
  </div>  
</div>
<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<script>
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<script>
window.onscroll = function() 
{
	myFunction()
}
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

