

            <footer class="footer">
             <div class="navbar-fixed-bottom">
               <?php
                 if ( wp_is_mobile() ) {
                     ?> 
                     <div class="container">
                    <div class="navbar small-device social pull-right">
                  <a href="https://www.facebook.com/skator"><i id="social-fb" class="mobile-social fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/skator"><i id="social-tw" class=" mobile-social fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://google.com/skator"><i id="social-gp" class="mobile-social fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:skator@gmail.com"><i id="social-em" class="mobile-social fa fa-envelope-square fa-3x social"></i>
                      </a>
                    </div> 
                 </div>
                <?php     
                 }else{
?>

                <div class="container">
                  <div class="navbar-text view pull-left">© 2017 - Skator <a href="mailto:ped.sjogren@gmail.com?Subject=Skator web" target="_top" class="author">Peder Sjögren</a></div>

                  <div class="navbar small-device social pull-right">
                  <a href="https://www.facebook.com/skator"><i id="social-fb" class="mobile-social fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/skator"><i id="social-tw" class=" mobile-social fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://google.com/skator"><i id="social-gp" class="mobile-social fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:skator@gmail.com"><i id="social-em" class="mobile-social fa fa-envelope-square fa-3x social"></i>
                      </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </footer>    
    <?php wp_footer(); ?>
</body>
</html>