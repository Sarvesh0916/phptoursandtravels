let menu = document.querySelectorAll('#menu-btn');
let navbar = document.querySelectorAll('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}


// window.onscroll = () =>{
//     menu.classList.remove
// }


var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });