const xhttp = new XMLHttpRequest();
xhttp.onload = function(){
  const person_info = JSON.parse(this.responseText);
  const testimonials = document.querySelector("#testimonials div");
  for (var i = 0; i < person_info.length; i++) {
    let innerDivText = "";
      innerDivText += "<div><span>0"+(1+i)+"</span>"
      innerDivText += "<h2>"+person_info[i].name+" "+person_info[i].surename+"</h2>";
      innerDivText += "<h3>"+person_info[i].email+"</h3>";
      innerDivText += "<h4>"+person_info[i].address+"</h4>";
      innerDivText += "</div>"
      testimonials.innerHTML += innerDivText;
  }
}
xhttp.open("GET","json/table.json",true);
xhttp.send();
let mydata = [
  "greta",
  "tervoli",
  "email\n",
  "address\n",
   {"fullname":()=>{return mydata[0]+" "+mydata[1];}}
 ];
//console.log(mydata[4].fullname());

const objectOne = {
  "name":"Klerind",
  "email":"myemail",
  "address":"myhomeaddress"
}
let objects = [];
objects[0] = objectOne;
//console.log(objects[0]);
