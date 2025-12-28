
const currentDate = document.querySelector(".date");
const currentHours = document.querySelector(".hour");
const currentMinutes = document.querySelector(".minutes");
const currentSeconds = document.querySelector(".seconds");

function getCurrentYear(){
    const date = new Date();
    const year = date.getFullYear();
    currentDate.textContent = year;

    // get time
    const hour = date.getHours();
    const minute = date.getMinutes();
    const second = date.getSeconds();

    currentHours.textContent = hour;
    currentMinutes.textContent = minute;
    currentSeconds.textContent = second;
}

setInterval(getCurrentYear,1000);


