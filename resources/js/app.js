require('./bootstrap');

require('alpinejs');


// import Swiper from "swiper";
import Swiper from 'swiper/bundle';
import "swiper/swiper-bundle.css";




const swiper = new Swiper(".mySwiper", {
	lazy: true,
	effect: "coverflow",
	centeredSlides: true,
	// slidesPerView: "auto",
	coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: true,
			},

	loop: true,
	// slidesPerView: 2,
	// spaceBetween: 30,
	grabCursor: true,
	pagination: {
		el: ".swiper-pagination",
		dynamicBullets: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	breakpoints: {
				640: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 1,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
			},
});



