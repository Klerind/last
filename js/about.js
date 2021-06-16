const apiKey = "59a7b83fb34cfe27a33ae709f66e508f"
//https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAXwWiNBdkDRU5dQ8imwUb8mzrZVbvARQM
//opens a new ajax request object
const request = new XMLHttpRequest()
request.onload = function () {
  //converts json data to javascript object and saves it to a constant variable
  const coordinates = JSON.parse(this.responseText)
//gets data from openweathermap api
function getData(data) {
  //converts data from json format to javascript object and saves it to a constant variable
  const weather = JSON.parse(data.responseText);
  //calls defaultElements function and passes mainContainer variable and weather data into the function
 defaultElements(weather);
}
//sends request to openweathermap api and gets data according to the given coordinates
getAjaxRequest("http://api.openweathermap.org/data/2.5/find?lat="+coordinates.location.lat+"&lon="+coordinates.location.lng+"&cnt=6&appid="+apiKey+"&units=metric",getData);
}
//request to google geolocation api
request.open("POST","https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAXwWiNBdkDRU5dQ8imwUb8mzrZVbvARQM",true)
//sends header to google api
request.setRequestHeader("Content-type", "application/json");
//sends the request to google geolocation api
request.send();
//funciton called on search
forms[3][1].onclick = () =>{
  //gets data form getAjaxRequest function
  function getData(data) {
    //converts json data to javascript object and saves it to a constant variable
    const citys = JSON.parse(data.responseText);
    const firstLetter = forms[3][0].value.charAt(0)
    //find first letter from search input field and saves it to a constant variable
    //converts first letter taken from search input field to upper case and saves it to a constant variable
    const firstLetterUpperCase = firstLetter.toUpperCase()
    //replace first letter of the value of search input field with the capitalize one
    const updateCity = forms[3][0].value.replace(firstLetter,firstLetterUpperCase)
    //loops into city.list.json file
    for (var i = 0; i < citys.length; i++) {
      //finds if entered value into search input filed exists into city.list.json file
      if (citys[i].name == updateCity) {
        //gets data from getAjaxRequest function
        function getData(data) {
          //converts json data to javascript object and saves it to a constant variable
          const weather = JSON.parse(data.responseText);
          //calls defaultMode function and passes weather variable
          defaultMode(weather)
          }
        //calls getAjaxRequest function and passes into it an address with dynamic city id variable and dynamic api key variable and passes a function as well into it
        getAjaxRequest("http://api.openweathermap.org/data/2.5/weather?id="+citys[i].id+"&units=metric&lang=al&appid="+apiKey,getData)
       }
      }
    }
  //calls getAjaxRequest function and passes a function and an address into it
  getAjaxRequest("json/city.list.json",getData)
}
