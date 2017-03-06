
<?php get_header(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
/*    
$(document).ready(function() {
	$(".image").hover(function(){
	    $(".image").animate({ opacity: 0 }, 'slow').addClass("image2");
        $(".image2").animate({ opacity: 1 }, 'slow');
      
	}, function() {
	    $(".image2").animate({ opacity: 0 }, 'slow'); 
        $(".image").animate({ opacity: 1 }, 'slow').removeClass("image2");
       
 
	});
});
    });
    */
</script>
</script>
<script>
   
$.noConflict();
    jQuery( document ).ready(function( $ ) {
  

$(document).ready(function() {
    
    $("#fade2").hide();
    
    //TODO: Fix for mobile
	$(".image").hover(function(){
        
        $("#fade").hide();
        $("#fade2").show();

	});
    
    $(".image2").mouseleave(function(){

        $("#fade2").hide();
        $("#fade").show();
 
	});
    
    
    

});
    });
</script>
	<html>
		<div class="container-fluid">	
            <div class="row">
                <div id="fade">
                    <img class="image img-responsive center-block fade-in" src="http://www.skator.se/wp-content/themes/skator/images/cover.jpg">
                </div>
                <div id="fade2">
                    <img class="image2 img-responsive center-block fade-in" src="http://www.skator.se/wp-content/themes/skator/images/dikt.jpg">
                </div>
            </div>
        </div>
	</html>

<?php get_footer(); ?>