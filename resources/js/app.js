import "./bootstrap";
// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

import { CountUp } from "countup.js/dist/countUp.umd";

document.addEventListener("DOMContentLoaded", () => {
    const getButtonHamburger = document.querySelector(".hamburger");
    const getSliderNav = document.querySelector(".slider-navbar");
    const backDrop = document.querySelector(".backdrop");
    const header = document.querySelector("#navbar");
    const getListItem = document.querySelectorAll(".item-activity");
    const getInputRange = document.querySelector(".body input");

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
        }, 500);
    });

    backDrop.addEventListener("click", () => {
        getSliderNav.classList.remove("show");
        backDrop.classList.remove("show");
    });

    window.addEventListener("scroll", () => {
        header.classList.toggle("show", window.scrollY > 0);
    });

    getListItem.forEach((el, index) => {
        el.addEventListener("click", () => {
            const item = getListItem[index];

            item.querySelector(".line").classList.toggle("active");
        });
    });

    setTimeout(() => {
        getInputRange.value = 3.8;
    }, 1000);

    const countUp = new CountUp("treeCount", 5690);

    countUp.start();
});
