<?php get_header(); ?>






<div class="container-fluid">

<?php get_header(); ?>  

<!-- Page overides index. in controlling html output for all of our pages -->
    
        <!-- main column -->
    <div class="main-column">
<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Aspotify%3Aplaylist%3A2PXdUld4Ueio2pHcB6sM8j" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
 
      <?php  if( have_posts() ) :
            while( have_posts() ) : the_post(); ?>




        
           
           <?php endwhile;

            else :

            echo "<p>No content found</p>";

            endif; ?>
    </div>

      


</div>


<?php get_footer(); ?>