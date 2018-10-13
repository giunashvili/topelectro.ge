var links = document.getElementsByTagName("a");

document.getElementsByClassName('current')[0].classList.remove('current');
links[2].classList.add('current');



function getAllUrlParams(url) {

  // get query string from url (optional) or window
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

  // we'll store the parameters here
  var obj = {};

  // if query string exists
  if (queryString) {

    // stuff after # is not part of query string, so get rid of it
    queryString = queryString.split('#')[0];

    // split our query string into its component parts
    var arr = queryString.split('&');

    for (var i=0; i<arr.length; i++) {
      // separate the keys and the values
      var a = arr[i].split('=');

      // in case params look like: list[]=thing1&list[]=thing2
      var paramNum = undefined;
      var paramName = a[0].replace(/\[\d*\]/, function(v) {
        paramNum = v.slice(1,-1);
        return '';
      });

      // set parameter value (use 'true' if empty)
      var paramValue = typeof(a[1])==='undefined' ? true : a[1];

      // (optional) keep case consistent
      paramName = paramName.toLowerCase();
      paramValue = paramValue.toLowerCase();

      // if parameter name already exists
      if (obj[paramName]) {
        // convert value to array (if still string)
        if (typeof obj[paramName] === 'string') {
          obj[paramName] = [obj[paramName]];
        }
        // if no array index number specified...
        if (typeof paramNum === 'undefined') {
          // put the value on the end of the array
          obj[paramName].push(paramValue);
        }
        // if array index number specified...
        else {
          // put the value at that index number
          obj[paramName][paramNum] = paramValue;
        }
      }
      // if param name doesn't exist yet, set it
      else {
        obj[paramName] = paramValue;
      }
    }
  }

  return obj;
}

 //class="under_border"

  var cat = getAllUrlParams().cat;
  var url = "/pages/products.php?cat=" + cat;

  document.getElementsByClassName("under_border")[0].classList.remove("under_border");


  for(var i=0; i< document.getElementsByTagName('a').length;i++){
    if(document.getElementsByTagName('a')[i].getAttribute('href')==url){

      document.getElementsByTagName('a')[i].setAttribute("class","under_border");
    }
  }





        function openDrowdown(x){
          var drop_content = x.parentElement.getElementsByClassName('products_dropdown_content');
          if(drop_content[0].style.display == "block"){
              x.parentElement.removeAttribute("id");
              drop_content[0].style.display = "none";
          }
          else{
              drop_content[0].style.display = "block";
              x.parentElement.setAttribute("id","jimsherFilfani");
          }
        }

          window.addEventListener('click', function(e){

          if (document.getElementById('jimsherFilfani').contains(e.target)){
          }
          else{
            document.getElementById('jimsherFilfani').getElementsByClassName('products_dropdown_content')[0].style.display = 'none';
            document.getElementById('jimsherFilfani').removeAttribute('id');
          }
        });


        function del(x){
          var trueOrFalse = confirm("ნამდვილად გსურთ აღნიშნული ჩანაწერის წაშლა?");
          if(trueOrFalse){

                window.location.replace(x.getAttribute('data-id'));
          }
        }





        var start = 0;
        var limit = 12;
        var cat = getAllUrlParams().cat;
        var reachedMax = false;

        $(window).scroll(function(){
          if($(window).scrollTop()==$(document).height() - $(window).height())
            getData();
        });



                function getData(){
                  if(reachedMax)
                    return;

                  $.post('getdata.php',{
                    getData :1,
                    cat:cat,
                    start: start,
                    limit: limit
                  }, function(response){
                    if(response=="reachedMax")
                      reachedMax = true;
                    else{
                      start+=limit;
                      $('.products_container').append(response);
                    }

                  });
                }

      $(document).ready(function(){

        getData();

      });
