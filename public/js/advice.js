document.addEventListener("DOMContentLoaded", function () {
    var imagenes = document.querySelectorAll('.image');
    var limiteImagenes = 4; 
    
    function actualizarImagenes() {
        var anchoVentana = window.innerWidth;

        if (anchoVentana >= 768) {
            limiteImagenes = 5; 
        } else {
            limiteImagenes = 6; 
        }

       
        for (var i = 0; i < imagenes.length; i++) {
            if (i < limiteImagenes) {
                imagenes[i].style.display = 'block';
            } else {
                imagenes[i].style.display = 'none';
            }
        }
    }

    actualizarImagenes();
    window.addEventListener('resize', actualizarImagenes);
});