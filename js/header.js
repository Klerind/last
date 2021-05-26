let forms = document.forms;
forms[2][1].onchange = () =>{
   if (forms[2][1].value === "blog_post") {
     forms[2][0].placeholder = "Search blog posts";
   }else {
     forms[2][0].placeholder = "Search username";
     forms[2][0].onkeyup = () => {
       const username = new XMLHttpRequest();
       username.onload = function () {
         forms[2].nextElementSibling.innerHTML = this.responseText;
       }
       username.open("GET","php/_username.php?search="+forms[2][0].value,true);
       username.send();
     }
   }
 }
