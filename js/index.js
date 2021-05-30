//Challenge one: Your age in days
let p = document.createElement("p");
function clickMe(){
  let age = prompt("What is your age? ");
  if (age === null) {
    p.innerHTML = "Please enter your age, the field was empty.";
  }else {
    let result = age * 360;
    p.innerHTML = "You are "+result+" days old.";
  }
  document.querySelector("#index div div:nth-child(3)").appendChild(p);
}
function reset() {
  if (document.querySelector("section div div:nth-child(3)").hasChildNodes()) {
   document.querySelector("section div div:nth-child(3) p").remove();
  }
};
//Challenge two: Cat Generator
let x = 1;
function generateCat(){
 if (x <= 6) {
  let img = document.createElement("img");
  img.setAttribute("src","images/thumbnails/Thinking-of-getting-a-cat_2_20.png");
  img.setAttribute("width","290");
  img.setAttribute("height","190");
  img.setAttribute("alt","cat");
  document.querySelector("section div:nth-child(2) div:nth-child(3)").appendChild(img);
   x++;
  }
}
//Challenge three: Rock, Paper, Scissors.
function rockPaperScissors(choice) {
  let yourChoice = choice.alt;
  let results = decideWinner(yourChoice,botChoice());
  console.log(results);
}
function botChoice() {
  return ["rock","paper","scissors"][botChoiceNumber()];
}
function botChoiceNumber() {
  return Math.floor(Math.random() * 3);
}
function decideWinner(yourChoice) {
  let decideWinner = {
     rock:{"paper":0,"rock":0.5,"scissors":1},
     paper:{"rock":1,"paper":0.5,"scissors":0},
     scissors:{"rock":0,"scissors":0.5,"paper":1}
  }
  return decideWinner[yourChoice][botChoice()];
}
//Challenge four: Change the Color of All buttons.
let buttons = document.getElementsByTagName('button');
let buttonsColor = [];
for (var i = 0; i < buttons.length; i++) {
buttonsColor.push(buttons[i].style.backgroundColor);
}
function buttonColors(data){
//change color of all buttons to tomato
  if (data.value === "tomato") {
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].style.backgroundColor = "tomato";
    }
//change color of all buttons to green
  }else if (data.value === "green") {
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].style.backgroundColor = "green";
    }
//change color of all buttons to blue
  }else if (data.value === "blue") {
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].style.backgroundColor = "blue";
    }
//reset color of all buttons
  }else if (data.value === "reset") {
    for (var i = 0; i < buttons.length; i++) {
       buttons[i].style.backgroundColor = buttonsColor[i];
    }
//change color of all buttons to random colors
  }else {
    const colors = ["#9370DB","#7B68EE","#D3D3D3","#DC143C","tomato","#66CDAA"];
    for (var i = 0; i < buttons.length; i++) {
      let random = Math.floor(Math.random() * 10);
       buttons[i].style.backgroundColor = colors[random];
    }
  }
}
//show info with json when a button is clicked
function loadInformation(address) {
  function getData(data) {
    const container = document.querySelector("div:nth-child(4) div:nth-child(3)");
    container.style.padding = "9em";
    window.scrollTo({
       top: 1230,
       left:0,
       behavior:"smooth"
      });
     container.style.padding = "1em";
     container.innerHTML = data.responseText;
 }
getAjaxRequest("ajax/"+address+".txt",getData);
}
