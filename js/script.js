$(document).ready(function() {
    var winH = $(window).height();
    var winW = $(window).width();
    
    $('#slide').css('height', winH);
    $(window).resize(function() {
        winH = $(window).height();
        $('#slide').css('height', winH);
        $('#slide>i').css('top',(winH-$('#slide>i').height())/2);
    });
    
    if(winW>=1280) {
        $('#gnb>li').hover(function() {
            $('.submenu', this).stop().slideDown();
        }, function() {
            $('.submenu', this).stop().slideUp();
        });
    }
    
    $('#slide>i').css('top',(winH-$('#slide>i').height())/2);
   
    mainSlide();
    
    var idx = 0;
    var cnt = $('.slideItem').length - 1;
    var ms;
    function mainSlide() {
        ms = setInterval(function() {
            $('.slideItem').eq(idx).fadeOut(800);
            idx==cnt?idx=0:idx++;
            $('.slideItem').eq(idx).fadeIn(800);
        }, 4000);
    }
});