//slideshow
var slides = $("#slideshow figure");
var currentSlide = 0;
var slideInterval = setInterval(slideshow,5000);
function slideshow() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

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
