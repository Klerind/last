//shows more info if any of cards is clicked
var mainDiv = document.querySelector("#animate div");
var divs = document.querySelectorAll("div");
var WantedDivs = [1,3,5];
var status = 0;
let link = document.getElementById('link');
function learnMore(event) {
  all(event);
     status = 1;
     console.log(event.parentElement.nextElementSibling);
}
function all(event) {
  for (var i = 0; i < WantedDivs.length; i++) {
    //divs[WantedDivs[i]].style.display = "none";
  }
  mainDiv.style.display = "block";
  event.innerText = "Back";
  event.previousElementSibling.textContent += "hello";
  event.addEventListener("click",reset);
  event.parentElement.style.display = "block";
}
function reset(){
   this.innerText = "Learn More...";
   mainDiv.style.display = "grid";
   status = 1;
   for (var i = 0; i < WantedDivs.length; i++) {
     divs[WantedDivs[i]].style.display = "block";
   }
  }
//if (state == true) {
//  alert("true");
  //setTimeout(function(){
    //data.removeEventListener("click",reset);
  //},300);
//}
//animating contact Letter
function fadeOut(id) {
   let test = document.getElementById(id);
   test.setAttribute("class", "animate");
   setTimeout(function () {
  test.removeAttribute('class');
  return false;
},3000);
}
//animating login signup form
function slideDownfadeIn(firstId,secondId){
  document.getElementById(firstId).style.animationName = "slideDown";
  document.getElementById(secondId).style.animationName = "fadeIn";
}
function fadeInslideDown(firstId,secondId) {
 document.getElementById(secondId).style.animationName = "slideDown";
 document.getElementById(firstId).style.animationName = "fadeIn";
}
