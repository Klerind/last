//function that creates form
function create_form() {
  //creates form tag
  const form = document.createElement("form");
  //checks if method attribute is empty string
  if (arguments[0].method !== "") {
    //sets method attribute
    form.setAttribute("method",arguments[0].method);
  }
  //checks if action attribute is empty string
  if (arguments[0].action !== "") {
    //sets action attribute
    form.setAttribute("action",arguments[0].action);
  }
  //loops the inputs that will added to form
  for (var i = 0; i < arguments[0].inputs.type.length; i++) {
  //creates input tag
  const input = document.createElement("input");
  //checks if type attribute is empty string
  if (arguments[0].inputs.type[i] !== "") {
    //sets type attribute
    input.setAttribute("type",arguments[0].inputs.type[i]);
  }
  //checks if name attribute is empty string
  if (arguments[0].inputs.name[i] !== "") {
    //sets name attribute
    input.setAttribute("name",arguments[0].inputs.name[i]);
  }
  //checks if value attribute is empty string
  if (arguments[0].inputs.value[i] !== "") {
    //sets value attribute
    input.setAttribute("value",arguments[0].inputs.value[i]);
  }
  //adds created inputs inside form
  form.appendChild(input);
  }
  return form;
}
