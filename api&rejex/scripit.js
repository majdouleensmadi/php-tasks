const API_KEY = 'e3d30d93064e90ac7ae6f837b4cf21b0'; // Replace with your own API key
const weatherContainer = document.querySelector('.weather-container');
const tempElem = document.querySelector('.weather-temp');
const descElem = document.querySelector('.weather-desc');
const citySelect = document.querySelector('.listcity');
const dayList = document.querySelectorAll('.week-list li');
const dateDaynameElem = document.querySelector('.date-dayname');
const dateDayElem = document.querySelector('.date-day');
const locationElem = document.querySelector('.location');
const pressureElem = document.querySelector('.weather-pressure');
const humidityElem = document.querySelector('.weather-humidity');
const windElem = document.querySelector('.weather-wind');

// Add event listener for city select change
citySelect.addEventListener('change', () => {
    const city = citySelect.value;
    getWeather(city);
});

// Add event listeners for day select change
dayList.forEach((day, index) => {
    day.addEventListener('click', () => {
        const city = citySelect.value;
        getWeather(city, index);
    });
});

// Fetch weather data from API and update HTML
function getWeather(city, dayIndex = 0) {
    const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${API_KEY}&units=metric`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const currentWeather = data.list[dayIndex];
            const temp = Math.round(currentWeather.main.temp);
            const desc = currentWeather.weather[0].description;
            const date = new Date(currentWeather.dt * 1000);
            const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const dayName = dayNames[date.getDay()];
            const day = date.getDate();
            const month = date.toLocaleString('default', { month: 'short' });
            const location = `${data.city.name}, ${data.city.country}`;
            const pressure = currentWeather.main.pressure;
            const humidity = currentWeather.main.humidity;
            const windSpeed = currentWeather.wind.speed;
            const windDirection = currentWeather.wind.deg;

            // Update HTML
            tempElem.textContent = `${temp}°C`;
            descElem.textContent = desc;
            dateDaynameElem.textContent = dayName;
            dateDayElem.textContent = `${day} ${month} ${date.getFullYear()}`;
            locationElem.textContent = location;
            pressureElem.textContent = `    ${pressure} %`;
            humidityElem.textContent = `   ${humidity}%`;
            windElem.textContent = `    ${windSpeed} m/s, ${windDirection}°`;

            // Update active day in day list
            dayList.forEach(day => day.classList.remove('active'));
            dayList[dayIndex].classList.add('active');
        })
        .catch(error => console.error(error));
}

// Get initial weather data for selected city and current day
const selectedCity = citySelect.value;
getWeather(selectedCity);
