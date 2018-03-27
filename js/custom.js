//menubar
jQuery(document).ready(function($){
    $("#menu").on("click", function(){
        $("#menubar").slideToggle();
        $(this).toggleClass("active");
    });

});

//othermenu
$("#other").click(function () {
    if($('#othermenu').css('display') == 'none') {
        $("#othermenu").css("display", "block");
        return false;
    } 
    else {
        $("#othermenu").css("display", "none");
        return false;
    }
});

//slideshow
function slideSwitch(){
    var $active = $('#slideshow figcaption.active');
    var $next = $active.next().length ? $active.next() : $('#slideshow figcaption:first');
    $active.addClass('last-active');
    $next.css({zIndex: 0.0})
        .addClass('active')
        .animate({zIndex: 3.0}, 1000, function(){
            $active.removeClass('active last-active');
        });
}

$(function(){
    var clear = setInterval(slideSwitch, 3000);
    $('#slideshow img').hover(
    function(){
        clearInterval(clear);
    },
    function(){
        clear = setInterval(slideSwitch, 3000);
    });
});



