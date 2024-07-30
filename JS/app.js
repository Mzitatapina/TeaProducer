/*manue product li hover
document.addEventListener("DOMContentLoaded", function() {
    var productsLi = document.querySelector('li a[href="#products"]').parentNode;
    var dropdown = productsLi.querySelector('.dropdown');

    productsLi.addEventListener("mouseover", function() {
      dropdown.style.display = "block";
    });

    productsLi.addEventListener("mouseout", function() {
      dropdown.style.display = "none";
    });
  });*/


//burger menue show and hide
let menuBox = document.getElementById("menuBox");
let menuIcon = document.getElementById("menuIcon");
let menuExit = document.getElementById("menuExit");


menuIcon.onclick = function (){
    menuBox.classList.toggle("open-menu");
    
}

menuExit.onclick = function(){
    menuBox.classList.remove("open-menu");
}




//product slider on display app version
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }

    const slider = document.querySelector('.slider');
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;

    slides.forEach((slide, i) => {
        if (i === currentSlide) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Initialize the first slide
showSlide(currentSlide);






