<?php get_header(); ?>

<div class="container-fluid">

    <div class="main-column">
<?php

   $maps_url ='http://drella.com/products/teg-publishing/skator';
    
    //Capture rturn in our json variable
    $maps_json = file_get_contents($maps_url);
    //convert json to a phparray, true = array else object
   $maps_array = json_encode($maps_json, true);
    
     
    $map = array_search f('container-fluid section', $maps_array);
    var_dump($map);
    
?>
      <?php  if( have_posts() ) :
            while( have_posts() ) : the_post(); ?>




        
           
           <?php endwhile;

            else :

            echo "<p>No content found</p>";

            endif; ?>
    </div>

      


</div>


<?php get_footer(); ?>