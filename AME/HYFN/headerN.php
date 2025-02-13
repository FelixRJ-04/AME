<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preload" href="normalize.css" as = "style">
<link rel="stylesheet" href="normalize.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/comunes/estilosNuevos.css" />

<script type="text/javascript">


        $(function () {
            var tam = viewSize();
            if (tam == "xl" || tam == "lg") {
                window.onscroll = function () { scrollFunction() };
            }
            else {
                $(".logoUASLP").removeClass("d-block").addClass("d-none");
                $(".textoUASLP").removeClass("d-none").addClass("d-block");
                $(".divisorUASLP-ENTIDAD").removeClass("d-block").addClass("d-none");
                $(".divisorUASLP-ENTIDADScroll").removeClass("d-none").addClass("d-block");
                $(".header").css("height", "85px");
            }
        });

        function scrollFunction() {
            if ($(window).scrollTop() > 100) {
                $(".logoUASLP").removeClass("d-block").addClass("d-none");
                $(".textoUASLP").removeClass("d-none").addClass("d-block");
                $(".divisorUASLP-ENTIDAD").removeClass("d-block").addClass("d-none");
                $(".divisorUASLP-ENTIDADScroll").removeClass("d-none").addClass("d-block");
                $(".header").css("height", "85px");

            }
            if ($(window).scrollTop() < 40) {
                $(".logoUASLP").removeClass("d-none").addClass("d-block");
                $(".textoUASLP").removeClass("d-block").addClass("d-none");
                $(".divisorUASLP-ENTIDAD").removeClass("d-none").addClass("d-block");
                $(".divisorUASLP-ENTIDADScroll").removeClass("d-block").addClass("d-none");
                $(".header").css("height", "120px");
            }
        }

        function viewSize() {
            return $('#sizer').find('div:visible').data('size');
        }
    </script>

<div class = "sticky-top">
  <div class="header-gris container-fluid text-end">
    <div class="container2 p-2">
        <a href="https://correo.uaslp.mx"><img src="https://www.uaslp.mx/ImagenesPortal/ImgComun/correo.png" width="30px" /> Correo</a> <span class="linea-header-gris"> | </span>
        <a href="https://www.uaslp.mx/Directorio"><img src="https://www.uaslp.mx/ImagenesPortal/ImgComun/directorio.png" width="30px" /> Directorio</a>
    </div>
  </div>
  <div class="lineaAzulMarino">
    <header class = "headerSeccion">
      <div class="contenedor acomodar">
        <section class = "separar">
        <h2>
            <a href="https://www.uaslp.mx">
              <img class = "ImagenLogo" src="data:image/png;base64"/>
            </a>
            <img class= "lineaBlanca" src="" alt=""> <a class = "menuLogo" href="https://www.ingenieria.uaslp.mx/ame">&Aacute;rea Mec&aacute;nica y El&eacute;ctrica</a>
          </h2>
          <!--<h2>UASLP <img class= "lineaBlanca" src="" alt=""> <a class = "menuLogo" href="https://www.ingenieria.uaslp.mx/ame">&Aacute;rea Mec&aacute;nica y El&eacute;ctrica</a></h2>-->
        </section>
        <section>
          <img class= "lineaBlancaO" src="" alt="">
          <!--<div class="p-1 bd-highlight"><a href="https://aspirantes.uaslp.mx/">Aspirantes</a> <span class="text-white"> | </span></div>
          <div class="p-1 bd-highlight"><a href="https://estudiantes.uaslp.mx/induccion/">Estudiantes</a> <span class="text-white"> | </span></div>
          <div class="p-1 bd-highlight"><a href="https://www.ingenieria.uaslp.mx/#">Egresados</a> <span class="text-white"> | </span></div>
          <div class="p-1 bd-highlight"><a href="https://www.ingenieria.uaslp.mx/#">Docentes</a> <span class="text-white"> | </span></div>
          <div class="p-1 bd-highlight"><a href="https://www.ingenieria.uaslp.mx/#">Administrativos</a> <span class="text-white"> | </span></div>-->
          <nav class="menuheader">
            <a class="p-1" href="https://aspirantes.uaslp.mx/">Aspirantes</a>
            <span class="text-white"> | </span>
            <a class="p-1" href="https://estudiantes.uaslp.mx/induccion/">Estudiantes</a>
            <span class="text-white"> | </span>
            <a class="p-1" href="https://www.ingenieria.uaslp.mx/#">Egresados</a>
            <span class="text-white"> | </span>
            <a class="p-1" href="https://www.ingenieria.uaslp.mx/#">Docentes</a>
            <span class="text-white"> | </span>
            <a class="p-1" href="https://www.ingenieria.uaslp.mx/#">Administrativos</a>
          </nav>
        </section>
      </div>
    </header>
    <div  class= "lineaAzul"></div>
  </div>
</div>
