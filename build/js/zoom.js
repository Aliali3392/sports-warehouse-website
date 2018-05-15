window.onload = function(){

  var normal = document.getElementById("normal");
  var lay = document.getElementById("lay");
  var bigImg = document.getElementById("bigImg");
  var img = bigImg.getElementsByTagName("img")[0];

  //when mouse move over, display #lay and #bigImg
  normal.onmouseover = function(){
    lay.style.display = "block";
    bigImg.style.display = "block";
  }
  //when mouse move out, hide #lay and #bigImg
  normal.onmouseout = function(){
    lay.style.display = "none";
    bigImg.style.display = "none";
  }

  normal.onmousemove = function( ev ){
    var ev = ev || event;
    //zoom pic
    var scale = 4; 
    //mouse in the middle of #lay
    var x = ev.clientX - lay.offsetWidth/2 - normal.offsetLeft;
    var y = ev.clientY - lay.offsetHeight/2 - normal.offsetTop + 182.333;
    //set width and height of #lay  
    lay.style.width = parseInt( normal.offsetWidth / scale ) + "px";
    lay.style.height = parseInt( normal.offsetHeight / scale ) + "px";
    //set width and height of #img
    img.style.width = normal.offsetWidth * scale + "px";
    img.style.height = normal.offsetHeight * scale + "px";
    
    //out of border
    //left border, when out of border x=0
    if( x<0 ){
      x = 0; 
    }
    //right border，mouse can't move out of right border 
    if( x>=normal.offsetWidth - lay.offsetWidth ){
      x = normal.offsetWidth - lay.offsetWidth; 
    }
    //top border, when out of border y=0
    if( y<0 ){
      y = 0;
    }
    //bottom border, mouse can't move out of bottom border
    if( y>= normal.offsetHeight - lay.offsetHeight ){
      y = normal.offsetHeight - lay.offsetHeight;  
    }
    //#lay move with ouse
    lay.style.left = x + "px";
    lay.style.top = y + "px";
    //zoom as 4X
    var left = scale * lay.offsetLeft;
    var top = scale * lay.offsetTop;
    img.style.left = -left + "px";
    img.style.top = -top + "px";
  }
}
