<?php if(has_children()  OR $post->post_parent > 0 ){?>
           
                         <?php what_menu('secondary'); ?>
           <nav class="nav navbar" role="navigation">>
            <a href="<?php the_permalink(get_top_ancestor_id()) ?>"> <?php echo get_the_title(get_top_ancestor_id()) ?></a>
              <ul>
                       <?php 
                        //child_of Lists the sub-pages of a single Page only; uses the ID for a Page as the value. Defaults to 0 (list all Pages). //Note that the child_of parameter will also fetch "grandchildren" of the given ID, not just direct descendants

                        $args = array(
                                //Current page being viewed. Get the children of the currently viewed page. Will disapear on children pages därför
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