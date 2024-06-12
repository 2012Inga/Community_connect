// Weather object to hold API key and related methods
let weather = {
  apiKey: "Your_Api_Key",

  // Method to fetch weather data for a given city
  fetchWeather: function (city) {
    fetch(
      "https://api.openweathermap.org/data/2.5/weather?q=" +
        city +
        "&units=metric&appid=" +
        this.apiKey
    )
      .then((response) => {
        // Check if the response is okay
        if (!response.ok) {
          alert("No weather found.");
          throw new Error("No weather found.");
        }
        // Return the response as JSON
        return response.json();
      })
      // Display the fetched weather data
      .then((data) => this.displayWeather(data));
  },

  // Method to display weather data on the webpage
  displayWeather: function (data) {
    // Destructure data object to get necessary properties
    const { name } = data;
    const { icon, description } = data.weather[0];
    const { temp, humidity } = data.main;
    const { speed } = data.wind;

    // Update HTML elements with weather data
    document.querySelector(".city").innerText = "Weather in " + name;
    document.querySelector(".icon").src =
      "https://openweathermap.org/img/wn/" + icon + ".png";
    document.querySelector(".description").innerText = description;
    document.querySelector(".temp").innerText = temp + "°C";
    document.querySelector(".humidity").innerText =
      "Humidity: " + humidity + "%";
    document.querySelector(".wind").innerText =
      "Wind speed: " + speed + " km/h";

    // Remove loading class once data is displayed
    document.querySelector(".weather").classList.remove("loading");

    // Update background image based on city
    document.body.style.backgroundImage =
      "url('https://source.unsplash.com/1600x900/?" + name + "')";
  },

  // Method to search weather for the city entered in the search bar
  search: function () {
    this.fetchWeather(document.querySelector(".search-bar").value);
  },
};

// Add event listener to search button
document.querySelector(".search button").addEventListener("click", function () {
  weather.search();
});

// Add event listener to search bar for Enter key press
document
  .querySelector(".search-bar")
  .addEventListener("keyup", function (event) {
    if (event.key == "Enter") {
      weather.search();
    }
  });

// Fetch weather for a default city on page load
weather.fetchWeather("Denver");
