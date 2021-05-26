forms[3][5].onclick = function (event) {
  if (typeof forms[3][0].value) {
    //alert("no number "+typeof forms[3][0].value);
  }
  console.log(forms[3][0].value);
  console.log(forms[3][1].value);
  console.log(forms[3][2].value);
  console.log(forms[3][3].value);
  console.log(forms[3][4].value);
  forms[3].style = "animation-name: fadeOut;";
  setTimeout(function(){
  forms[3].style = "animation-name: none;";
  },3300);
}
