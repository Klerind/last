//global variables
const forms = document.forms;
const allButtons = document.querySelectorAll('button');
function saveComment (thisComment) {
  let commentAndId = [];
  commentAndId.push(thisComment.form[0].value);
  commentAndId.push(thisComment.form[0].name);
  const sendComment = new XMLHttpRequest();
  sendComment.open("GET","php/saveComment.php?data="+commentAndId,true);
  sendComment.send();
  thisComment.form[0].value = "";
  thisComment.form[0].placeholder = "add comment...";
  setTimeout(()=>{
    window.location.reload();
  },300);
}
//Ajax send request, only sends data to a file with GET
function sendAjaxRequest(url,data) {
  const request = new XMLHttpRequest();
  request.open("GET",url+"?data="+data,true);
  request.send();
}
//Ajax get request, only get data from a file with GET
function getAjaxRequest(url,getData) {
  const request = new XMLHttpRequest();
  request.onload = function () {
    if (this.readyState === 4 && this.status === 200) {
        getData(this);
    }
  }
  request.open("GET",url,true);
  request.send();
}
//Ajax send and get request, sends and gets data from a file with GET
function getSendAjaxRequest(url,data,getData) {
   const request = new XMLHttpRequest();
   request.onload = function () {
     if (this.readyState === 4 && this.status === 200) {
        getData(this);
     }
   }
   request.open("GET",url+"?data="+data,true);
   request.send();
}
