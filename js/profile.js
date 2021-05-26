//check for validatin one blog post forms
const title = document.forms["postArticle"]["title"];
const content = document.forms["postArticle"]["content"];
()=>{
  if (title.value === "" && content.value === "") {
      title.style = "box-shadow: inset 0 0 4px 0 red";
      content.style = "box-shadow: inset 0 0 4px 0 red";
  }else if (title.value === "" && content.value !== "") {
      title.style = "box-shadow: inset 0 0 4px 0 red";
      content.style = "none";
   }else if (title.value !== "" && content.value === "") {
      title.style = "none";
      content.style = "box-shadow: inset 0 0 4px 0 red";
   }else {
      title.style = "none";
      content.style = "none";
   }
 return false;
}
//Show databases name with ajax
function showDatabases() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function(){
    document.getElementsByTagName("P")[0].innerHTML = this.responseText;
  }
  xhttp.open("GET","cms/showDatabases.php",true);
  xhttp.send();
}
//show text.txt file to profile page
const requestData = new XMLHttpRequest();
requestData.onload = function () {
  document.getElementById("print").innerHTML += this.responseText;
}
requestData.open("GET","files/read.php",true);
requestData.send();
