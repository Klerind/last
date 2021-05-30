//animating contact Letter
function fadeOut(id) {
   let div = document.getElementById(id);
   div.setAttribute("class", "animate");
   setTimeout(function () {
  div.removeAttribute('class');
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
