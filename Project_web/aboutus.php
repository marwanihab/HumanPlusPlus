

<?php 
include 'header.php';
?>

 <div class="nparallax"></div>

<div class="row" style="height: auto;">
<div class="columns small-3 medium-6 large-12">
    <p id="ntext1"><b>About Us</b></p>
    <p id="ndummy">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are I’m a great place for you to tell a story and let your users know a little more about you.​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are</p>
</div>
</div>
<div class="grid-x grid-padding-x" style="height: auto; background-color: rgb(235, 193, 16);">
<div class="large-4  medium-4 small-4 cell">
<i class="fa fa-rocket" id="nrocket"></i>
<div id="nborder"></div>
<p  id="nmission"><b>Our Mission</b></p>
<p id="nquote"> To inspire lifelong learning,<br> advance knowledge, and <br>strengthen ,develops<br> and supports our communities. </p>

</div>
<div class="large-4  medium-4 small-4 cell" >
        <i class="fa fa-eye" id="neye"></i>
        <div id="nborder"></div>
        <p id="nmission"><b>Our Vision</b></p>
<p id="nquote"> Life is good<br>Spread the power<br> of optimism. </p>

</div>
<div class="large-4  medium-4 small-4 cell" style="height:auto;" >
<i class="fa fa-book" id="nbook"></i>
<div id="nborder"></div>
<p id="nmission"><b>Research fields</b></p>
<?php
        $conn = mysqli_connect("localhost", "root", "", "humanplusplus");
        $result = mysqli_query($conn, "select name from researchfield");
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name="{$row['name']}";
       echo "<div class='nfield'>$name</div>";
    }
}
    ?> 


</div>

</div>
<div class="row" style="height: auto;">
<div class="columns large-4  medium-2 small-1">
<p id="ntext1"><b>Meet Our Team</b></p>
<?php
        $conn = mysqli_connect("localhost", "root", "", "humanplusplus");
        $result = mysqli_query($conn, "select picture,name,title,fieldsOfResearch from teammembers");
        
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        $pic="{$row['picture']}";
        $name="{$row['name']}";
        $field="{$row['fieldsOfResearch']}";
        $title="{$row['title']}";
       echo "<div class='nrow'>
        <div class='ncolumn'> 
        <div class='ncard'>
        <div class='ncontainer'>
        <img src='$pic' style='width:100%;height:50%;'>
      <div class='noverlay'>
      <div class='nnamee'>Name: $name <br> Title:  $title <br> Research Field: $field</div>
        </div>
        </div>
         </div>
</div>
        </div>"
        ;

    }
}
    ?> 

 
   
</div>
</div>


<?php
include 'footer.php'
?>

