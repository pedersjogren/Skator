<?php get_header(); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
<style>
    
    
 

</style>
<?php 

    include "classes/instagramscraper.php"; 
    include "classes/render.php"; 

    $instagram = new InstagramScraper('___skator___');

?>

<div class="container-fluid">

    <?php // get_template_part("partials/navchildren"); 
            get_template_part("partials/navsecondary"); 	




    //echo Render::displayImages($instagram->getInstagramStream());
    echo Render::displayModalImages($instagram->getInstagramStream());    

    /*
        $results_array = $instagram->getInstagramStream();
        
        //$res= $instagram->getInsta2();
        //var_dump($res);
       // echo '<a href="http://instagram.com/___skator___"> <img src="'.$res.'"></a></br>';
      
        $col = 0;
        $index = 0;
        $output = array();
        $modalOutput = array();
        $output[] = "<div class='row'>"; 

        do{
            $latest_array = $results_array ['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$index];
            $col++;
            $index++;    

            $output[] = '<div class="col-md-3 col-md-12">';
            $output[] = '<img class= "image img-responsive playing" id='.$index.' data-toggle="modal" data-target="#myModal" src='.$latest_array['display_src'].'>';
            $output[] = '</div>';
            //$output .= '<a href="http://instagram.com/p/'.$latest_array['code'].'"><img src="'.$latest_array['display_src'].'"></a></div>';
            //$output .= 'Likes: '.$latest_array['likes']['count'].' - Comments: '.$latest_array['comments']['count'].'<br/>';
            
            
            $modalOutput[] = $latest_array['display_src'];
            //$modalOutput['id'] = $index;
            
            var_dump( $latest_array);

            
        if($col === 4){
            $output []= "</div>"; 
            $output []= "<div class='row'>";    
            $col = 0;    
        }
                
        } while ($index <= 11);
  

       foreach($output as $put){
            echo $put;
      
       }
    /*
      echo "<pre>";
       print_r($put);
     echo "</pre>";
     '
     
     
           //$output .= '<a href="http://instagram.com/p/'.$latest_array['code'].'"><img src="'.$latest_array['display_src'].'"></a></div>';
                    //$output .= 'Likes: '.$latest_array['likes']['count'].' - Comments: '.$latest_array['comments']['count'].'<br/>';
     */
  ?>
  


<script>
    var $j = jQuery.noConflict();
    $j( document ).ready(function( $ ) {
  
    $j(document).ready(function () {
        $j('#myModal').on('show.bs.modal', function (e) {
            var image = $(e.relatedTarget).attr('src');
            $j(".modal-img-responsive").attr("src", image);
            //console.log(this);
        });
});
    });
</script>


<?php get_footer(); ?>