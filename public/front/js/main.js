var swiper = new Swiper(".hero-list", {
    slidesPerView: 1,
    loop: false,
    speed: 1000,
    spaceBetween: 0,
    autoplay: {
        delay: 3000,
    },
});

var swiper = new Swiper(".tech-list", {
    slidesPerView: 1,
    loop: true,
    speed: 1000,
    spaceBetween: 0,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".tech-button-next",
        prevEl: ".tech-button-prev",
    },
});

var swiper = new Swiper(".best-list", {
    loop: false,
    speed: 600,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".best-button-next",
        prevEl: ".best-button-prev",
    },
});

var swiper = new Swiper(".beforeafter-list", {
    loop: true,
    speed: 600,
    slidesPerView: 1,
    spaceBetween: 10,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: "auto",
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 18,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 18,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".beforeafter-button-next",
        prevEl: ".beforeafter-button-prev",
    },
});

var swiper = new Swiper(".review-list", {
    slidesPerView: 1,
    loop: true,
    speed: 600,
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 30,
    breakpoints: {
        640: {
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 1,
            autoplay: false,
        },
        1200: {
            slidesPerView: 2,
            autoplay: false,
        },
        1400: {
            slidesPerView: 3,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".review-button-next",
        prevEl: ".review-button-prev",
    },
});

var swiper = new Swiper(".increase-list", {
    loop: true,
    speed: 600,
    spaceBetween: 10,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: "auto",
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 18,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".increase-button-next",
        prevEl: ".increase-button-prev",
    },
});

var swiper = new Swiper(".news-list", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    speed: 600,
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 20,
    breakpoints: {
        640: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
        1200: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
        1400: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
    },
});

var swiper = new Swiper(".hospital-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: ".hospital-button-next",
        prevEl: ".hospital-button-prev",
    },
});

var swiper = new Swiper(".logo-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: ".logo-button-next",
        prevEl: ".logo-button-prev",
    },
});

var swiper = new Swiper(".photo-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".photo-button-next",
        prevEl: ".photo-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 0,
            autoplay: false,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 0,
            autoplay: false,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 0,
            autoplay: false,
        },
    },
});

var swiper = new Swiper(".ba-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".ba-button-next",
        prevEl: ".ba-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 10,
            autoplay: false,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 20,
            autoplay: false,
        },
    },
});

var swiper = new Swiper(".blog-list", {
    loop: true,
    speed: 600,
    spaceBetween: 10,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: "auto",
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 18,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".beforeafter-button-next",
        prevEl: ".beforeafter-button-prev",
    },
});

var swiper = new Swiper(".say-list", {
    loop: true,
    speed: 600,
    spaceBetween: 10,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: "auto",
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 18,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".say-button-next",
        prevEl: ".say-button-prev",
    },
});

var swiper = new Swiper(".doctors-list", {
    speed: 800,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".doctors-button-next",
        prevEl: ".doctors-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            centeredSlides: false,
            autoplay: false,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 10,
            autoplay: false,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: false,
        },
    },
});
var swiper = new Swiper(".tag-list", {
    loop: true,
    speed: 600,
    spaceBetween: 10,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: "auto",
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 18,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".tag-button-next",
        prevEl: ".tag-button-prev",
    },
});

var swiper = new Swiper(".doctor-say-list", {
    slidesPerView: 1,
    loop: true,
    speed: 1000,
    spaceBetween: 0,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".doctor-say-button-next",
        prevEl: ".doctor-say-button-prev",
    },
});

// show-more
$(document).ready(function () {
    $(".show-more-btn").click(function () {
        $(".show-more-content").toggleClass("hide-more");
        $(this).text(function (i, v) {
            return v == "devamını göster" ? "devamını gizle" : "devamını göster";
        });
    });
});

// header
$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $("header").addClass("active");
    } else {
        $("header").removeClass("active");
    }
});

$(".webmenu a").click(function () {
    $(".offcanvas").offcanvas("hide");
});

$.fn.accordion = function () {
    var accordion = this;
    accordion.find(".menu-box-item").click(function () {
        $(document).find(".menu-box-item").removeClass("active");
        $(document).find(".menu-box-item-content").removeClass("active");
        $(this).parent(".menu-box").find(".menu-box-item-content").slideToggle(200).toggleClass("active");
        $(this).toggleClass("active");
        $(".menu-box-item-content").not(".active");
        $('.menu-box-item-content:not(".active")').slideUp(200);
    });
    return this;
};

$(".menu-box").accordion();

// fancybox
Fancybox.bind("[data-fancybox]", {
    // Your custom options
});

// tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// popover
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// toast
const toastTrigger = document.getElementById("liveToastBtn");
const toastLiveExample = document.getElementById("liveToast");

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    toastTrigger.addEventListener("click", () => {
        toastBootstrap.show();
    });
}
