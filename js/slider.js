var initialImg = 1;

function changeImage(n){
  var slides = document.getElementsByClassName('slide');
  var dots = document.getElementsByClassName('dot');

  if(n<1){
    n = slides.length;
    initialImg = n;
  }
  else if(n>slides.length){
    n = 1;
    initialImg = 1;
  }
console.log(initialImg);

document.getElementsByClassName('active_dot')[0].classList.remove("active_dot");

  for(var i=0; i< slides.length; i++){
    slides[i].style.display = "none";
  }

  slides[n-1].style.display = "block";
  dots[n-1].className += " active_dot";
}

changeImage(initialImg);

setInterval(function(){
  changeImage(++initialImg);
},7000);
