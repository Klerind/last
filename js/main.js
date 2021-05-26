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
