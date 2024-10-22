

// sliders 
function createCustomSlider(sliderContainer, imagePaths, intervalTime) {
    const bullets = sliderContainer.querySelectorAll('.bullet');
    const contentSlider = sliderContainer.querySelector('.content-slider');
    let currentIndex = 0;
    let sliderInterval;

    function changeBackgroundImage(index) {
        contentSlider.style.backgroundImage = `url(${imagePaths[index]})`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % imagePaths.length;
        changeBackgroundImage(currentIndex);
        bullets.forEach((bullet, i) => bullet.classList.toggle('active', i === currentIndex));
    }

    function startSliderInterval() {
        sliderInterval = setInterval(nextSlide, intervalTime); 
    }

    function resetSliderInterval() {
        clearInterval(sliderInterval);
        startSliderInterval();
    }

    bullets.forEach((bullet, index) => {
        bullet.addEventListener('click', () => {
            currentIndex = index;
            changeBackgroundImage(index);
            bullets.forEach((bullet, i) => bullet.classList.toggle('active', i === index));
            resetSliderInterval();
        });
    });

    startSliderInterval();
}

// home slider
const slider1Images = [
    'assets/imgs/agriculture.jpg',
    'assets/imgs/agriculture.jpg',
    'assets/imgs/agriculture.jpg',
    'assets/imgs/agriculture.jpg'
];
const slider1Container = document.querySelector('#slider1');
if (slider1Container) {
    createCustomSlider(slider1Container, slider1Images, 3000);
}


// export sliders 
const slider2Images = [
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png',
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png',
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png',
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png'
];
const slider2Container = document.querySelector('#slider2');
if (slider2Container) {
    createCustomSlider(slider2Container, slider2Images, 3000);
}

// prince gurieli slide 
const slider3Images = [
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png',
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png',
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png',
    'https://keenitsolutions.com/products/wordpress/braintech/wp-content/uploads/2020/12/about-5.png'
];
const slider3Container = document.querySelector('#slider3');
if (slider3Container) {
    createCustomSlider(slider3Container, slider3Images, 3000);
}



// contact slide 
const slider4Images = [
    '../assets/imgs/contact-bg.svg',
    '../assets/imgs/contact-bg.svg',
    '../assets/imgs/contact-bg.svg',
    '../assets/imgs/contact-bg.svg'
];
const slider4Container = document.querySelector('#slider4');
if (slider4Container) {
    createCustomSlider(slider4Container, slider4Images, 3000);
}


// Export - slider 
const slider5Images = [
    '../assets/imgs/contact-bg.svg',
    '../assets/imgs/contact-bg.svg',
    '../assets/imgs/contact-bg.svg',
    '../assets/imgs/contact-bg.svg'
];
const slider5Container = document.querySelector('#slider5');
if (slider5Container) {
    createCustomSlider(slider5Container, slider5Images, 3000);
}




// home products slider 
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1, 
    spaceBetween: 10, 
    loop: true, 
    speed: 3000,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 3000, 
        disableOnInteraction: false, 
    },
    speed: 800, 
    breakpoints: {
        768: { 
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2,
        },
        1024: { 
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 4,
        }
    }
});





