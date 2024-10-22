document.addEventListener('DOMContentLoaded', function() {
    const fadeIns = document.querySelectorAll('.fade-in');
  
    const fadeInOnScroll = () => {
      fadeIns.forEach((element, index) => {
        const rect = element.getBoundingClientRect();
        const elementID = `fade-in-${index}`;  
  
        if (sessionStorage.getItem(elementID)) {
          element.classList.add('visible');
          return;
        }
  
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          element.classList.add('visible');
          sessionStorage.setItem(elementID, 'true');
        }
      });
    };
  
    fadeInOnScroll();
    window.addEventListener('scroll', fadeInOnScroll);
  });
  