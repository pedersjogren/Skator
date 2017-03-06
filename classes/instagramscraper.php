<?php
class InstagramScraper
{
    private $insta_source;
            
    public function __construct($insta_source){
                
        $this->insta_source = file_get_contents( 'https://www.instagram.com/' . $insta_source );
    }
            
    public function getInstagramStream(){
        $shards = explode('window._sharedData = ', $this->insta_source);
        $insta_json = explode(';</script>', $shards[1]); 
        return json_decode($insta_json[0], TRUE);
                
    }
    
    public function getInstagramSingle(){
        preg_match('#<meta +property=\\"og:image\\" +content=\\"(http.+?\.jpg)\\"#', $this->insta_source, $result);
        return $result[1];
    }
            
}

?>