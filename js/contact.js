var links = document.getElementsByTagName("a");

document.getElementsByClassName('current')[0].classList.remove('current');
links[4].classList.add("current");

var windowHeight = window.outerHeight;
var headerHeight = document.getElementById('topheader').clientHeight;
var footerHeight = document.getElementById('topfooter').clientHeight;

setContainerHeight = windowHeight - headerHeight - footerHeight-50 ;

getContainer = document.getElementsByClassName('cat_container');

getContainer[0].style.height = setContainerHeight+"px";
