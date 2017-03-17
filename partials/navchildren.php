<?php if(has_children()  OR $post->post_parent > 0 ){?>

    <?php what_menu('secondary'); ?>
        <nav class="nav navbar navbar-inverse" role="navigation">>
            <a href="<?php the_permalink(get_top_ancestor_id()) ?>">
                <?php echo get_the_title(get_top_ancestor_id()) ?>
            </a>
            <ul>
                <?php 
                
                $args = array(
                    'child_of' => get_top_ancestor_id(),
                    //remove "pages" output in the page. replace the li with a empty quote
                    'title_li' => ''
                )
                ?>
                <?php wp_list_pages($args); ?>
                 //TODO: render menu from class
            
            </ul>
        </nav>
        
    <?php }?>