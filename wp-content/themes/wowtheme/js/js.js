



// Time function for html website 
function time(){
    const day = document.getElementById('day');
    const hours = document.getElementById('hours');
    const minutes = document.getElementById('minutes');
    const seconds = document.getElementById('seconds');
    let d = new Date().getDay();
    let h = new Date().getHours();
    let m = new Date().getMinutes();
    let s = new Date().getSeconds();
    hours.innerHTML = h;
    day.innerHTML = d;
    minutes.innerHTML = m;
    seconds.innerHTML = s;
};
setInterval(time, 1000);
document.querySelector('.toggle').addEventListener('click', function() {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('show');
});

// lets start header code with swiperjs
function time() {
    const day = document.getElementById('day');
    const hours = document.getElementById('hours');
    const minutes = document.getElementById('minutes');
    const seconds = document.getElementById('seconds');
    let d = new Date().getDay();
    let h = new Date().getHours();
    let m = new Date().getMinutes();
    let s = new Date().getSeconds();
    hours.innerHTML = h;
    day.innerHTML = d;
    minutes.innerHTML = m;
    seconds.innerHTML = s;
};
setInterval(time, 1000);
// swiper js start here header section is here

