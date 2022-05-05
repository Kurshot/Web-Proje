const url = 'https://api.openweathermap.org/data/2.5/';
const key = 'b76af4cc6f05b1901d0d43a5fef844fe';


let icon = document.querySelector(".weather-icon");



const getResult = () => {
    let query = `${url}weather?q=Sivas&appid=${key}&units=metric&lang=tr`;
    fetch(query)
    .then(weather => {
        return weather.json();
    })
    .then(displayResult)
}

const displayResult = (result) => {

    let temp = document.querySelector('.temp');
    temp.innerHTML = `Sıcaklık : ${Math.round(result.main.temp)}°C`;
    let desc = document.querySelector('.desc');
    desc.innerHTML = `Hava ${result.weather[0].description}`;
    let iconDiv = document.querySelector('.weather-icon');
    let icon = result.weather[0].icon;
    iconDiv.innerHTML = `<img src = ../icons/${icon}.png>`;


}
getResult();





