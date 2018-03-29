//slideshow
//if javascripts is not available, just hidden
// $("#slideshow").css("display", "block");

var pauseTime = 4000;

var slides = $("#slideshow .slide");
var currentSlide = 0;
//var slideInterval = setInterval(slideshow,2000);
var slideInterval = setTimeout(slideshow,pauseTime);

//nav dots
var navDots = $("#nav-dots li");

function slideshow() {
    slides.removeClass("showing");
    currentSlide = (currentSlide+1)%slides.length;    
    slides.eq(currentSlide).addClass("showing");

    navDots.removeClass("active");
    $(navDots[currentSlide]).addClass("active");

    slideInterval = setTimeout(slideshow,pauseTime)
}

navDots.on("click", function(){
    //Find index of dot
    var index = navDots.index($(this));
    currentSlide = index - 1;

    //reset timer & force slide change
    clearTimeout(slideInterval);
    slideshow();
});


//menubar
jQuery(document).ready(function($) {
    $("#menu").on("click", function() {
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
