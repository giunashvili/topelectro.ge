var start = 0;
var limit =12;
var reachedMax = 0;


$(window).scroll(function(){
  if($(window).scrollTop()==$(document).height()-$(window).height()){

      if(reachedMax==0)
      getData();

  }

});

function getData(){


  $.post('getdata.php',
          {
            getData:1,
            start:start,
            limit:limit,
            searchKey:searchKey
          },function(response){

            if(response=="reachedMax")
              reachedMax = 1;

            else{
              start+=limit;
              $('.products_container').append(response);
            }

            if(reachedMax == 1)
                  $('.products_container').append("<br style='clear:both;'><hr style='margin-top:10px'><h1 class='B_Arial' style='font-size:120%; padding:10px; text-align:center'>მეტი ჩანაწერის მოძიება <span style='color:red'>ვერ</span> მოხერხდა</h1>");

          });

}

$(document).ready(function(){
  getData();
});
