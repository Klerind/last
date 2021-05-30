//searchs for users in database
forms[2][1].onchange = () =>{
   if (forms[2][1].value === "blog_post") {
     forms[2][0].placeholder = "Search blog posts";
   }else {
     forms[2][0].placeholder = "Search username";
     forms[2][0].onkeyup = () => {
       function getData(data) {
         forms[2].nextElementSibling.innerHTML = data.responseText;
       }
       getSendAjaxRequest("php/_username.php",forms[2][0].value,getData);
     }
   }
 }
