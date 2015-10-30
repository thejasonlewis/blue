//foundation.set_namespace = function() {};
//jQuery(document).foundation();


jQuery(document).ready(function(){
    jQuery(document).foundation();

    $(".find-table").click(function(){
        $("#reserve-a-table").toggle();
    });
    $('#m-table-finder').click(function(){
        $('.mobile-find-a-table').show();
    });
    $('.close-container').click(function(){
        $('.mobile-find-a-table').hide();
    });

    $('.close').click(function(){
        $("#reserve-a-table").hide();

    });
});






