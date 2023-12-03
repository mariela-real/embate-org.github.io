document.addEventListener("DOMContentLoaded", function () {
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 5000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
     
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
   // scrollbar: {
    //  el: '.swiper-scrollbar',
    //  draggable: true,
    //},
    
  });

  function showTextOverlays(slide) {
    const textOverlays = slide.querySelectorAll(".text-overlay");

    textOverlays.forEach((textOverlay) => {
      textOverlay.style.opacity = 1;
    });

   // Cancelar la animación si el mouse está sobre el texto
   textOverlays.forEach((textOverlay) => {
    textOverlay.addEventListener("mouseenter", () => {
      clearTimeout(animationTimeout);
    });

    textOverlay.addEventListener("mouseleave", () => {
      // Continuar la animación después de 3 segundos
      animationTimeout = setTimeout(() => {
        textOverlay.style.opacity = 0;
      }, 3000);
    });
  });
 
  }

  swiper.on("slideChange", function () {
    const currentSlide = swiper.slides[swiper.realIndex];
    showTextOverlays(currentSlide);
  });

  swiper.on("reachBeginning", function () {
    // Cuando se llega al principio del slider (primer slide), resetea las animaciones
    const currentSlide = swiper.slides[swiper.realIndex];
    const textOverlays = currentSlide.querySelectorAll(".text-overlay");
    
    textOverlays.forEach((textOverlay) => {
      textOverlay.style.opacity = 0;
    });
  });

  // Mostrar el primer texto en el slide inicial
  const initialSlide = swiper.slides[swiper.realIndex];
  showTextOverlays(initialSlide);
});