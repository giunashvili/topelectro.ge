alert('hai')

var about_text = document.getElementsByClassName('about');
var spans = document.getElementsByTagName('span');
var links = document.getElementsByTagName('a');

document.getElementsByClassName('current')[0].classList.remove('current');
links[3].classList.add('current');

var windowHeight = window.outerHeight;
var headerHeight = document.getElementById('topheader').clientHeight;
var footerHeight = document.getElementById('topfooter').clientHeight;

setContainerHeight = windowHeight - headerHeight - footerHeight-50 ;

getContainer = document.getElementsByClassName('cat_container');

getContainer[0].style.height = setContainerHeight+"px";


spans[4].classList.add("activespan");

about_text[1].style.display="none";
about_text[2].style.display="none";

//created by giorgi giunashvili a.k.a bleachlover2011
//mstyuans?
//atrakeb
function geoGetsClicket(){
  spans[4].classList.add("activespan");
  spans[5].classList.remove("activespan");
  spans[6].classList.remove("activespan");
  about_text[0].style.display = "block";
  about_text[1].style.display = "none";
  about_text[2].style.display = "none";
}


function engGetsClicked(){
  spans[5].classList.remove("activespan");
  spans[4].classList.remove("activespan");
  spans[6].classList.add("activespan");
  about_text[0].style.display = "none";
  about_text[1].style.display = "block";
  about_text[2].style.display = "none";
}


function rusGetsClicked(){
  spans[4].classList.remove("activespan");
  spans[5].classList.add("activespan");
  spans[6].classList.remove("activespan");
  about_text[0].style.display = "none";
  about_text[1].style.display = "none";
  about_text[2].style.display = "block";
}
