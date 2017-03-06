<?php

    class Render
    {
        
        public static function displayImages($results_array){
            
            try{
                $col = 0;
                $index = 0;
                $output = "";
                $output .= "<div class='row'>"; 
   
                do{
                    $latest_array = $results_array ['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$index];
                    $col++;
                    $index++;    


                    $output .= '<div class="col-md-3 col-md-12 playing">';
                    $output .= '<a href="http://instagram.com/p/'.$latest_array['code'].'" target=_blank>';
                    $output .= '<img class= "image img-responsive fade-in centered-images" src='.$latest_array['display_src'].'>';
                    $output .= '</a></div>';

                    if($col === 4){
                        $output .= "</div>"; 
                        $output .= "<div class='row'>";    
                        $col = 0;    
                    }

                } while ($index <= 11);

                return $output;
                
            }catch( Exception $ex){
                
                echo "Problem loading Instagram images (V) (°,,,,°) (V) " . $ex;
                
            }
        }
        
        public static function displayModalImages($results_array){
            
            try{

      
                $col = 0;
                $index = 0;
                $output = '';
                $output .= "<div class='row'>"; 

                do{
                    $latest_array = $results_array ['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$index];
                    $col++;
                    $index++;    

                    $output .= '<div class="col-md-3 col-md-12 playing">';
                    $output .= '<img class= "image img-responsive fade-in centered-images" data-toggle="modal" data-target="#myModal" src='.$latest_array['display_src'].'>';
                    $output .= '</div>';

                if($col === 4){
                    $output .= "</div>"; 
                    $output .= "<div class='row'>";    
                    $col = 0;    
                }

                } while ($index <= 11);

                $output .= '<div id="myModal" class="modal fade" role="dialog">';
                $output .= '<div class="modal-dialog">';
                $output .= '<div class="modal-content">';
                $output .= '<div class="modal-body">';
                $output .= '<a href="http://instagram.com/p/'.$latest_array['code'].'" target=_blank><img class="modal-img-responsive" src= ""/>';
                $output .= '</div>';
                $output .= '<div class="modal-footer">';
                $output .= '<div class="modal-icon">
   	                            <a href="">
                                    <span class="icon fa-stack fa-lg">
                                    <i class="back fa fa-square fa-stack-2x"></i>
                                    <i class="front fa fa-instagram fa-stack-1x"></i>
                                    </span>
                                </a></div>';
                $output .= '<button type="button" class="btn btn-default" data-dismiss="modal">Stäng</button>';
                $output .= '</div></div></div></div></div>';
             //icon-instagram"
                return $output;
                
            }catch( Exception $ex){
                
                echo "Problem loading modal Instagram images (V) (°,,,,°) (V) " . $ex;
                
            }
        }
    }


?>