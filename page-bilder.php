<?php get_header(); ?>






<div class="container-fluid">

<?php get_header(); ?>  

<!-- Page overides index. in controlling html output for all of our pages -->
    
        <!-- main column -->
    <div class="main-column">

      <?php //get_template_part("partials/navchildren"); ?>
      <?php get_template_part("partials/navsecondary"); ?>   
      <?php  if( have_posts() ) :
            while( have_posts() ) : the_post(); ?>




        
           
           <?php endwhile;

            else :

            echo "<p>No content found</p>";

            endif; ?>
    </div>

      


</div>


<?php get_footer(); ?>