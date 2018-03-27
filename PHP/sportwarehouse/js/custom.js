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
var slides = document.querySelectorAll('#slideshow .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,3000);

function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
} 


