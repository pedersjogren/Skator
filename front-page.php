
<?php get_header(); ?>

<div class="container-fluid">	
            
              <?php  if ( wp_is_mobile() ) { ?>
                <div class="row">
                <div id="fade">
                  <img class="image img-responsive center-block fade-in" src="http://www.skator.se/wp-content/themes/skator/images/cover.jpg">
                    </div>
                </div>
             <?php   }else{ ?>
                <div class="row">
                 <div id="fade">
                  <img class="image img-responsive center-block fade-in" src="http://www.skator.se/wp-content/themes/skator/images/cover.jpg">
                    </div>
                <div id="fade2">
                    <img class="image2 img-responsive center-block fade-in" src="http://www.skator.se/wp-content/themes/skator/images/dikt.jpg">
                </div>
                </div>
             <?php   }  ?>
         
        </div>


<?php get_footer(); ?>