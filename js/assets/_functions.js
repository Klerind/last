//global variables
//const forms = document.forms;
const mainContainer = document.getElementById("cards");
//on wait global functions
function defaultElements(weather) {
  //loops into weather items
  for (var i = 0; i < weather.count; i++) {
    //creates div element
    const container = document.createElement("div");
    //creates span element
    const city = document.createElement("span");
    //adds to span element text content and city name from weather object
    city.textContent = "City: "+weather.list[i].name;
    //adds span and its content inside div element
    container.appendChild(city);
    //creates span element
    const temperature = document.createElement("span");
    //adds to span element text content and temperature value from weather object
    temperature.innerHTML = "Temperature: "+weather.list[i].main.temp+"&#x26AC;C";
    //adds span and its content inside div element
    container.appendChild(temperature);
    //creates span element
    const humidity = document.createElement("span");
    //adds to span element text content and humidity value from weather object
    humidity.textContent = "Humidity: "+weather.list[i].main.humidity+"%";
    //adds span and its content inside div element
    container.appendChild(humidity);
    //creates span element
    const speed = document.createElement("span");
    //adds to span element text content and wind speed value from weather object
    speed.textContent = "Wind speed: "+weather.list[i].wind.speed+"m/s";
    //adds span and its content inside div element
    container.appendChild(speed);
    //creates span element
    const clauds = document.createElement("span");
    //adds to span element text content and clouds value from weather object
    clauds.textContent = "Nr of Clouds: "+weather.list[i].clouds.all;
    //adds span and its content inside div element
    container.appendChild(clauds);
    //adds div inside section element
    mainContainer.appendChild(container);
  }
}
function defaultMode(weather) {
  //creates div element
  const container = document.createElement("div");
  //creates span element
  const city = document.createElement("span");
  //adds to span element text content and city name from weather object
  city.textContent = "City: "+weather.name;
  //adds span and its content inside div element
  container.appendChild(city);
  //creates span element
  const temperature = document.createElement("span");
  //adds to span element text content and temperature value from weather object
  temperature.innerHTML = "Temperature: "+weather.main.temp+"&#x26AC;C";
  //adds span and its content inside div element
  container.appendChild(temperature);
  //creates span element
  const humidity = document.createElement("span");
  //adds to span element text content and humidity value from weather object
  humidity.textContent = "Humidity: "+weather.main.humidity+"%";
  //adds span and its content inside div element
  container.appendChild(humidity);
  //creates span element
  const speed = document.createElement("span");
  //adds to span element text content and wind speed value from weather object
  speed.textContent = "Wind speed: "+weather.wind.speed+"m/s";
  //adds span and its content inside div element
  container.appendChild(speed);
  //creates span element
  const clauds = document.createElement("span");
  //adds to span element text content and clouds value from weather object
  clauds.textContent = "Nr of clauds: "+weather.clouds.all;
  //adds span and its content inside div element
  container.appendChild(clauds);
  //remove all divs inside section element if it has
  while (mainContainer.hasChildNodes()) {
    mainContainer.removeChild(mainContainer.firstChild);
  }
  //adds div inside section element
  mainContainer.appendChild(container);
}
