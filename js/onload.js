jQuery(function( $ ) {
	'use strict';
  

$(document).ready(function() {
    
    $("#fade2").hide();
    
    //TODO: Fix for mobile
	$(".image").hover(function(){
        
        $("#fade").hide();
        $("#fade2").show();

	});
    
    $(".image2").mouseleave(function(){

        $("#fade2").hide();
        $("#fade").show();
        
        
 
	});
    
    $("body").addClass("afterLoad");
    



});
    });
    

