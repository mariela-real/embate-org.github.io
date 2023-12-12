
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMBATE</title>
    <script src="https://kit.fontawesome.com/13fe1b16d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/footer_footer.css')}}" />

</head>

<footer>
        <!-- content__footer controla todo el pie de pagina-->

    <div class="content_footer">
         <!-- footer_contact controla todo lo ralacinado con logo de la empresa, contacto y redes sociales-->
        <div class="footer_contact">
            <!-- contact_logo  controla propiedades del logo-->
            <div class="contact_logo">
                <img src="{{asset('img/LOGO_letras_blancas.png')}}" alt="">
            </div>
            <!-- contact_info  controla los texto de contacto y direccion-->
            <div class="contact_info">
                <h4>
                Oficina principal
                </h4>
                <p>
                Calle Jordan & Av. Oquendo, Cochabamba, Bolivia.
                </p>
            </div>
          <!-- contact_icons logo ce encarga de los iconos y cada icono tiene asignada la clase icon__menu para q todos tengan las mismas propiedades-->
            <div class="contact_icons">
                <a href="https://www.facebook.com/profile.php?id=100064455141674">
                <i class="fa-brands fa-facebook icon__menu"></i>
                </a>
                <a href="https://www.tiktok.com/@embate.incubadora">
                <i class="fa-brands fa-tiktok icon__menu"></i>
                </a>

            </div>
        </div>
        <!-- footer_contact_2  controla el texto 2-->

        <div class="footer_contact_2">
            <h3>
            Desarrollado por EMBATE
            </h3>
        </div>
         <!-- footer_copyright  y icon__coyright se encargan del logo y del texto de derechos reservados-->
        <div class="footer_copyright">
            <i class="fa-regular fa-copyright icon__coyright"></i>
            <h2>
                2023 EMBATE | All Rights Reserved
            </h2>
        </div>
    </div>
</footer>
</html>
