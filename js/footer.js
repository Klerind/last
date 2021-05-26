function goToTop() {
  window.scrollTo({
    top:0,
    left:0,
    behavior:"smooth"
  });
}
window.onload = () =>{
const loader = document.querySelector("#footer span:nth-child(2)");
loader.className = "hidden";
};
