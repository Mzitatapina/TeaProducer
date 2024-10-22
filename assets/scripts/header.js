const burgerMenu = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav');
const body = document.body; 

burgerMenu.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    burgerMenu.classList.toggle('open');
    if (navMenu.classList.contains('active')) {
        body.classList.add('menu-open'); 
    } else {
        body.classList.remove('menu-open'); 
    }
});



// this working only home page - check scroll y and change header
document.addEventListener('DOMContentLoaded', () => {
    
    if (document.body.classList.contains('home')) {
        const navbar = document.querySelector('.navbar');
        
        const checkScroll = () => {
            const scrollY = window.scrollY;
            const viewportHeight = window.innerHeight;

            if (window.innerWidth > 1040) {
                const threshold = viewportHeight - 125; 
                if (scrollY > threshold) {
                    navbar.style.marginLeft = '0'; 
                    navbar.style.width = '100%'; 
                    navbar.style.backgroundColor = 'rgba(0,0,0,0.8)'; 
                    navbar.style.transition = 'margin-left 0.5s, width 0.5s, background-color 0.5s'; 
                } else {
                    navbar.style.marginLeft = '90px'; 
                    navbar.style.width = 'calc(100% - 90px)'; 
                    navbar.style.backgroundColor = 'transparent'; 
                }
            } else {
                //  screens (<= 1040px) only apply bg color
                const smallScreenThreshold = viewportHeight - 80; 
                if (scrollY > smallScreenThreshold) {
                    navbar.style.backgroundColor = 'rgba(0,0,0,0.8)'; 
                    navbar.style.transition = 'background-color 0.5s'; 
                } else {
                    navbar.style.backgroundColor = 'transparent'; 
                }

                navbar.style.marginLeft = ''; 
                navbar.style.width = ''; 
            }
        };

        window.addEventListener('scroll', checkScroll);
        window.addEventListener('resize', checkScroll);

        checkScroll();
    }
});


document.addEventListener('DOMContentLoaded', () => {
    if (document.body.classList.contains('animated-content')) {
        const navbar = document.querySelector('.navbar');
        
        const checkScroll = () => {
            const scrollY = window.scrollY;
            const viewportHeight = window.innerHeight;

            if (window.innerWidth > 1040) {
                const threshold = viewportHeight - 125; 
                if (scrollY > threshold) {
                    navbar.style.marginLeft = '0'; 
                    navbar.style.width = '100%'; 
                    navbar.style.backgroundColor = 'white'; 
                    navbar.style.transition = 'margin-left 0.5s, width 0.5s, background-color 0.5s'; 
                } else {
                    navbar.style.marginLeft = '90px'; 
                    navbar.style.width = 'calc(100% - 90px)'; 
                    
                }
            } else {
                //  screens (<= 1040px) only apply bg color
                const smallScreenThreshold = viewportHeight - 80; 
                if (scrollY > smallScreenThreshold) {
                    navbar.style.backgroundColor = 'white'; 
                    navbar.style.transition = 'background-color 0.5s'; 
                } 
                navbar.style.marginLeft = ''; 
                navbar.style.width = ''; 
            }
        };

        window.addEventListener('scroll', checkScroll);
        window.addEventListener('resize', checkScroll);

        checkScroll();
    }
});





// document.addEventListener('contextmenu', function(e) {
//     e.preventDefault();
// });

// document.onkeydown = function(e) {
//     if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && e.key === 'I')) {
//         e.preventDefault();
//     }
// };