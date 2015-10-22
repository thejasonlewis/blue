function sizeVideoFrame(){
    $(window).resize(function() {
        if($(window).width() > 992){
            //var headerHeight = $(".navigation-nav").outerHeight();
            var footerHeight = $("#footer").outerHeight();
            var phoneHeight = $(".phone-number").outerHeight();
            var headFootHeight =   headerHeight + footerHeight + phoneHeight;
            var iframeHeight = document.documentElement.clientHeight - headFootHeight - 50;
            $("#background-photo").css("height", iframeHeight)
        }
    });

};

$(function () {
    sizeVideoFrame();
});

$(document).foundation();
$(".find-table").click(function(){
    $("#reserve-a-table").toggle();
});
$('#m-table-finder').click(function(){
    $('.mobile-find-a-table').show();
});
$('.close-container').click(function(){
    $('.mobile-find-a-table').hide();
});