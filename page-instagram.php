<?php get_header(); 

include "classes/instagramscraper.php"; 
include "classes/render.php"; 
$instagram = new InstagramScraper('___skator___');

?>

<div class="container-fluid">

    <?php
    
    get_template_part("partials/navsecondary"); 	

    //For modal images
    // Render::displayModalImages($instagram->getInstagramStream());

    echo Render::displayImages($instagram->getInstagramStream()); ?>
    
</div>    

<?php get_footer(); ?>