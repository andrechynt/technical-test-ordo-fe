import "./bootstrap";
// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", () => {
    const getButtonHamburger = document.querySelector(".hamburger");
    const getSliderNav = document.querySelector(".slider-navbar");
    const backDrop = document.querySelector(".backdrop");

    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    getButtonHamburger.addEventListener("click", () => {
        getSliderNav.classList.toggle("show");
        
        setTimeout(() => {
          backDrop.classList.toggle("show");
        }, 500)
    });

    backDrop.addEventListener("click", () => {
        getSliderNav.classList.remove("show");
        backDrop.classList.remove("show");
    });
});
