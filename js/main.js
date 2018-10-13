
document.getElementById('myDropdown').style.display = "none";




function dropdown(){
  if(document.getElementById('myDropdown').style.display=="none")
    document.getElementById('myDropdown').style.display = "block";
  else
    document.getElementById('myDropdown').style.display = "none";
}

window.onclick = function(event){
  if(!event.target.matches(".dropdown_sign")){
    document.getElementById('myDropdown').style.display = "none";
  }

}
