function sizeVideoFrame(){
    $(window).resize(function() {
        if($(window).width() > 992){
            var headerHeight = $(".navigation-nav").outerHeight();
            var footerHeight = $("#footer").outerHeight();
            var phoneHeight = $(".phone-number").outerHeight();
            var headFootHeight =   headerHeight + footerHeight + phoneHeight;
            var iframeHeight = document.documentElement.clientHeight - headFootHeight - 50;
            $("#main-photo").css("height", iframeHeight)
        }
    });

};

$(function () {
    sizeVideoFrame();
});