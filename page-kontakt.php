<?php get_header(); ?>


<div class="container-fluid">

    <div class="main-column">

    <?php  if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <?php endwhile;

    else :

    echo "<p>No content found</p>";

    endif; ?>
    
    </div>

</div>

<?php get_footer(); ?>