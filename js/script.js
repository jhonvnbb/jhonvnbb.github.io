// Toggle  class active

const navbarNav = document.querySelector(".navbar");

// Ketika Hamburger Menu di Klik

document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//  Klik di luar side bar

const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});