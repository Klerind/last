let startFrom = 0;
 function ajaxToPhpRequest() {
   const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
       document.querySelector("main").innerHTML += this.responseText;
    }
   xhttp.open("GET","php/_postArticles.php?startFrom="+startFrom,true);
   xhttp.send();
 }
 ajaxToPhpRequest();
 window.onscroll = () =>{
   let windowHeight = window.innerHeight, windowScrollTop = window.scrollY, documentHeight = document.body.clientHeight;
   if (windowHeight + windowScrollTop >= documentHeight) {
      startFrom = startFrom + 3;
      ajaxToPhpRequest();
     }
 }
