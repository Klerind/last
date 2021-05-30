let startFrom = 0;
function getData(data){
  document.querySelector("main").innerHTML += data.responseText;
}
 window.onscroll = (data) =>{
   let windowHeight = window.innerHeight, windowScrollTop = window.scrollY, documentHeight = document.body.clientHeight;
   if (windowHeight + windowScrollTop >= documentHeight) {
      startFrom = startFrom + 3;
      getSendAjaxRequest("php/_postArticles.php",startFrom,getData);
     }
 }
getSendAjaxRequest("php/_postArticles.php",startFrom,getData);
