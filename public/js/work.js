let tituloSeleccionado = null;

    function toggleTexto(titulo) {
        const contenido = titulo.nextElementSibling;

        if (tituloSeleccionado && tituloSeleccionado !== titulo) {
           
            tituloSeleccionado.classList.remove("seleccionado");
            tituloSeleccionado.nextElementSibling.classList.remove("active");
        }

        tituloSeleccionado = titulo;

        if (!titulo.classList.contains("seleccionado")) {
            titulo.classList.add("seleccionado");
            contenido.classList.add("active");
        } else {
            titulo.classList.remove("seleccionado");
            contenido.classList.remove("active");
            tituloSeleccionado = null; 
        }

        
    }