(function ($) {
    'use strict';

    $("#fade2").hide();

    $(".image").hover(function () {

        $("#fade").hide();
        $("#fade2").show();

    });

    $(".image2").mouseleave(function () {

        $("#fade2").hide();
        $("#fade").show();

    });

    $("body").addClass("afterLoad");

    $(window).resize(function () {
        let windowWidth = $(window).width();
        if (windowWidth < 768) {
            $(".view").hide();
            $(".social").removeClass("pull-right").addClass("text-center");
        } else {
            $(".view").show().addClass("pull-left");
            $(".social").removeClass("text-center").addClass("pull-right");
        }
    });
  
    //Modals
    $('#myModal').on('show.bs.modal', function (e) {
        let image = $(e.relatedTarget).attr('src');
        $(".modal-img-responsive").attr("src", image);
    });
    
})(jQuery);

