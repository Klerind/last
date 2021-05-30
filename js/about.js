//Getting data with XmlhttpRequest and printing them to the page
var pageNumber = 1;
function showContent() {
  function getData(data) {
    var object = JSON.parse(data.responseText);
    let string = "";
    for (var i = 0; i < object.length; i++ ) {
      string += "<p>"+object[i].name+" is a "+object[i].species+" that likes ";
      for (var ii = 0; ii < object[i].foods.likes.length; ii++) {
        if (ii === 0) {
         string += object[i].foods.likes[ii];
        }else {
          string += " and "+object[i].foods.likes[ii];
        }
      }
      string += " and dislikes ";
      for (var ii = 0; ii < object[i].foods.dislikes.length; ii++) {
        if (ii === 0) {
         string += object[i].foods.dislikes[ii];
        }else {
          string += " and "+object[i].foods.dislikes[ii];
        }
      }
      string += ".</p><hr>";
    }
    document.querySelector("#about div div article").innerHTML += string;
  }
  getAjaxRequest("json/animals-"+pageNumber+".json",getData);
  pageNumber++;
  if (pageNumber > 3) {
    document.querySelector("#about div div header button").style = "opacity: 0; visibility: hidden";
  }
}
//Changing image on click event with a new outline
function changeImage(img) {
   let address = location.href;
   let lastIndex = address.lastIndexOf("/");
   let lastAddress = address.slice(0,lastIndex + 1);
  img.src = lastAddress + "cms/uploads/Screenshot_from_2021-03-28_16-10-13_240x230.png";
  console.log(lastAddress);
}
//printing data to table from object
let persons_info = [
  ["emri","mbiemeri","adresa@email.com","Shqiperi/Elbasan/Gramsh"],
  ["Lopa","mbiemri","lopa@email.com","Shqiperi/Elbasan/Gramsh"],
  ["Bardhosh","mbiemir","bardhosh@email.com","Shqiperi/Elbasan/Gramsh"]
];
var table = "";
for (var i = 0; i < persons_info.length; i++) {
  table += "<tr>";
 for (var ii = 0; ii < persons_info[i].length; ii++) {
     table += "<td>"+persons_info[i][ii]+"</td>";
 }
 table += "</tr>";
}
 document.querySelector("#about div:nth-child(2) div:nth-child(1) table tbody").innerHTML = table;
//adding new row in table
document.querySelector("#about div:nth-child(2) button:nth-of-type(1)").addEventListener("click",function(){
  document.querySelector("#about div:nth-child(2) div:nth-child(2) table tbody").innerHTML += "<tr><td contenteditable='true'></td><td contenteditable='true'></td><td contenteditable='true'></td><td contenteditable='true'></td></tr>";
});
//remove table row
document.querySelector("#about div:nth-child(2) button:nth-of-type(2)").addEventListener("click",function(){
  document.querySelector("#about div:nth-child(2) div:nth-child(2) table tbody tr:last-child").remove();
});
//saving data to array
document.querySelector("#about div:nth-child(2) button:nth-of-type(3)").addEventListener("click",function(){
   let data = document.querySelectorAll("#about div:nth-child(2) div:nth-child(2) table tbody tr");
   //sending data with Ajax to a php file
   let objects = [];
   for (var i = 0; i < data.length; i++) {
         let php_data = {};
         php_data.name = data[i].cells[0].innerText;
         php_data.surename = data[i].cells[1].innerText;
         php_data.email = data[i].cells[2].innerText;
         php_data.address = data[i].cells[3].innerText;
         objects[i] = php_data;
   }
   const jsonData = JSON.stringify(objects);
   sendAjaxRequest("cms/ajax_data.php",jsonData);
});
//showing data to new table
document.querySelector("#about div:nth-child(2) button:nth-of-type(4)").addEventListener("click",function(){
  let tableContent = "";
  for (var i = 0; i < data.length; i++) {
     tableContent += "<tr>";
    for (var ii = 0; ii < data[i].cells.length; ii++) {
        tableContent += "<td>"+data[i].cells[ii].innerText+"</td>";
    }
    tableContent += "</tr>";
  }
  document.querySelector("#about div:nth-child(2) div:nth-child(2) table:last-child tbody").innerHTML = tableContent;
});
