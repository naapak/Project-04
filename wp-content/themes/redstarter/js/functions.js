
// match height for pictures
jQuery( document ).ready(function($) {
    $('.pictureHeight').matchHeight({byRow:false});
});



// for the search bar//
jQuery( document ).ready(function($){

    "use strict";

    var $searchArea = $('.top-search-menu');

    $searchArea.click(function(){
      $(this).addClass('input-expanded');
    });

    $(document).mouseup(function (e){

        var container = $(".top-search-menu");

        if (!$searchArea.is(e.target) && $searchArea.has(e.target).length === 0){
          $searchArea.removeClass('input-expanded');
        }

    });

});


//for the maps


