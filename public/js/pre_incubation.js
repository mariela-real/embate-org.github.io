const items = document.querySelectorAll('.item');

const textos = document.querySelectorAll('.texto');

   items[0].classList.add('active');
   textos[0].style.display = 'block';

  items.forEach((item, index) => {
    item.addEventListener('click', () => {
      textos.forEach((texto) => {
        texto.style.display = 'none';
      });
      
      item.classList.add('active');
      textos[index].style.display = 'block';

    items.forEach((el) => {
      el.classList.remove('active');
    });

    item.classList.add('active');
    });
  });


  
window.addEventListener('resize', function () {
    const originalContent = document.getElementById('originalContent');
    const replacementContent = document.getElementById('replacementContent');
    if (window.innerWidth <= 600) {
        
        originalContent.style.display = 'none';
        replacementContent.style.display = 'block';
    } else {
        items.forEach((item, index) => {            
            textos.forEach((texto) => {
                texto.style.display = 'none';
            });    
            items.forEach((el) => {
              el.classList.remove('active');
            });    
            items[0].classList.add('active');
            textos[0].style.display = 'block';
            
          });
        
        originalContent.style.display = 'flex';
        replacementContent.style.display = 'none';
    }
});


window.addEventListener('load', function () {
    window.dispatchEvent(new Event('resize'));
});
