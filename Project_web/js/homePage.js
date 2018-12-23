

$(document).ready(function() {
    
    $("#yScroll0").click(

         
         function()
         { 
          
           $(document).scrollTop(0);

              $("#yMainImage").slideUp(2000);
              $("#yProjects").show();

              $("#yScroll0").hide();
            

              $("#project1").fadeIn(3000);
              $("#project2").fadeIn(4000);
              $("#project3").fadeIn(5000);
              $("#project4").fadeIn(6000);
                $("#yScroll1").show();

              $(".blog1").hide();
              $(".blog2").hide();
              $(".blog3").hide();
              $(".blog4").hide();

              $("#event1").hide();
              $("#event2").hide();
              $("#event3").hide();
              $("#event4").hide();

              $("#news1").hide();
              $("#news2").hide();
              $("#news3").hide();
              $("#news4").hide();
         }

    	);



    $("#yScroll1").click(

         
         function()
         { $(document).scrollTop(0);
               
              $("#yProjects").slideUp(2000);
              $("#yBlogs").show();

              $("#yScroll1").hide();


              $(".blog1").fadeIn(3000);
              $(".blog2").fadeIn(4000);
              $(".blog3").fadeIn(5000);
              $(".blog4").fadeIn(6000);
              $("#yScroll2").show();

              $("#project1").hide();
              $("#project2").hide();
              $("#project3").hide();
              $("#project4").hide();


              $("#event1").hide();
              $("#event2").hide();
              $("#event3").hide();
              $("#event4").hide();

              $("#news1").hide();
              $("#news2").hide();
              $("#news3").hide();
              $("#news4").hide();

         }

    	);


   $("#yScroll2").click(

       function()
       {  $(document).scrollTop(0);
                 $("#yBlogs").slideUp(2000);
                 $("#yEvents").show();
                 $("#yScroll2").hide();



              $("#event1").fadeIn(3000);
              $("#event2").fadeIn(4000);
              $("#event3").fadeIn(5000);
              $("#event4").fadeIn(6000);
              $("#yScroll3").show();

              $(".blog1").hide();
              $(".blog2").hide();
              $(".blog3").hide();
              $(".blog4").hide();

              $("#project1").hide();
              $("#project2").hide();
              $("#project3").hide();
              $("#project4").hide();

              $("#news1").hide();
              $("#news2").hide();
              $("#news3").hide();
              $("#news4").hide();

       }

   	);

      $("#yScroll3").click(

       function()
       {  $(document).scrollTop(0);
                 $("#yEvents").slideUp(2000);
                 $("#yNews").show();

                 $("#yScroll3").hide();



              $("#news1").fadeIn(3000);
              $("#news2").fadeIn(4000);
              $("#news3").fadeIn(5000);
              $("#news4").fadeIn(6000);
              $("#yScroll4").show();

              $(".blog1").hide();
              $(".blog2").hide();
              $(".blog3").hide();
              $(".blog4").hide();

              $("#project1").hide();
              $("#project2").hide();
              $("#project3").hide();
              $("#project4").hide();



              $("#event1").hide();
              $("#event2").hide();
              $("#event3").hide();
              $("#event4").hide();
       }

   	);


       $("#yScroll4").click(

       function()
       {
         $(document).scrollTop(0);
              $("#yNews").hide();
              $("#yMainImage").slideDown(2000);
              $("#yScroll4").hide();

              $(".blog1").hide();
              $(".blog2").hide();
              $(".blog3").hide();
              $(".blog4").hide();

              $("#project1").hide();
              $("#project2").hide();
              $("#project3").hide();
              $("#project4").hide();


              $("#news1").hide();
              $("#news2").hide();
              $("#news3").hide();
              $("#news4").hide();


              $("#event1").hide();
              $("#event2").hide();
              $("#event3").hide();
              $("#event4").hide();

              $("#yScroll0").show();


       }

   	);



  


});