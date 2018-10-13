var fullHeight = window.outerHeight;

height = fullHeight - document.getElementsByTagName('header')[0].clientHeight - document.getElementsByTagName('footer')[0].clientHeight - 20;

set = document.getElementsByClassName("cat_container");

set[0].style.height=height+"px";


function showMe(){

  var elements = document.getElementById('product_dropdown_content');

  if(elements.style.display=="block"){
    elements.style.display = "none";
  }
  else {
    elements.style.display = "block";
  }
}

window.addEventListener("click",function (e) {
  if(!document.getElementById('product_dropdown').contains(e.target)){
    document.getElementById('product_dropdown_content').style.display = "none";
  }
});


function del(x){
  var url = x.getAttribute('data-id');
  var trueOrFalse = confirm("ნამდვილად გსურთ აღნიშნული ჩანაწერის წაშლა?");
  if(trueOrFalse)
    window.location.replace(url);
}
