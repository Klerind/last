//scroll to top function
function goToTop() {
  window.scrollTo({
    top:0,
    left:0,
    behavior:"smooth"
  });
}
//shows loader while page is loading
window.onload = () =>{
const loader = document.querySelector("#footer span:nth-child(2)");
loader.className = "hidden";
};
