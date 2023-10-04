<?php

$docenteImagen1 = $GLOBALS['PATH_DOCENTE'] . 'reynamatiascorreo.webp';
$type = pathinfo($docenteImagen1, PATHINFO_EXTENSION);
$docenteImagen1 = file_get_contents($docenteImagen1);
$docenteImagen1 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen1);

$docenteImagen2 = $GLOBALS['PATH_DOCENTE'] . 'martinHernandezOrdonez.webp';
$type = pathinfo($docenteImagen2, PATHINFO_EXTENSION);
$docenteImagen2 = file_get_contents($docenteImagen2);
$docenteImagen2 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen2);

$docenteImagen3 = $GLOBALS['PATH_DOCENTE'] . 'mariadolorescastrovaldes.webp';
$type = pathinfo($docenteImagen3, PATHINFO_EXTENSION);
$docenteImagen3 = file_get_contents($docenteImagen3);
$docenteImagen3 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen3);

$docenteImagen4 = $GLOBALS['PATH_DOCENTE'] . 'eduardotoledocerritos.webp';
$type = pathinfo($docenteImagen4, PATHINFO_EXTENSION);
$docenteImagen4 = file_get_contents($docenteImagen4);
$docenteImagen4 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen4);

$docenteImagen5 = $GLOBALS['PATH_DOCENTE'] . 'cesarmanuelriveraespinosa.webp';
$type = pathinfo($docenteImagen5, PATHINFO_EXTENSION);
$docenteImagen5 = file_get_contents($docenteImagen5);
$docenteImagen5 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen5);

$docenteImagen6 = $GLOBALS['PATH_DOCENTE'] . 'josuenietometzger.webp';
$type = pathinfo($docenteImagen6, PATHINFO_EXTENSION);
$docenteImagen6 = file_get_contents($docenteImagen6);
$docenteImagen6 = 'data:image/' . $type . ';base64,' . base64_encode($docenteImagen6);

?>
<!-- Carrusel de portada -->
<section>
  <div id="myCarousel" class="carousel slide col-lg-12 col-sm-12" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner-impresora.webp" class="d-block w-100 align-middle" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption d-flex flex-column">
            <h1 class="mainTitle text-center font-bold m-2 shadow-text">Ingeniería Mecánica</h1>
            <h2 class="mainSubtitle text-center font-bold shadow-text">Donde la teoría se encuentra con la aplicación práctica.</h1>
              <p><a class="mainButton btn font-bold d-none d-md-inline-flex" href="?option=3">Explorar</a>
              </p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/banner-clase.webp" class="d-block w-100 align-middle" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="mainTitle text-center font-bold m-2 shadow-text">Ingeniería Mecánica</h1>
            <h2 class="mainSubtitle text-center font-bold shadow-text">Convierte tus ideas en máquinas que transforman el mundo</h1>
              <p><a class="mainButton btn font-bold d-none d-md-inline-flex" href="?option=1">Explorar</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/ITVER-4.webp" class="d-block w-100 align-middle" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="mainTitle text-center font-bold m-2 shadow-text">Ingeniería Mecánica</h1>
            <h2 class="mainSubtitle text-center font-bold d-none d-md-inline-flex shadow-text">Cada pieza que diseñes será un paso hacia un futuro más eficiente y sostenible.</h1>
              <p><a class="mainButton btn font-bold d-none d-md-inline-flex" href="?option=5">Explorar</a></p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!--Fin Carrusel de portada -->

<!-- Razones para estudiar la carrera -->
<section class="p-2">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-2 d-flex justify-content-center align-items-center">
      <iframe class='aspect-video video-reticula' src="https://www.youtube.com/embed/h_6cz4TmE98" title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; 
       clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>
      </iframe>
    </div>

    <div class="lightSection col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">¿Por qué estudiar Ingeniería Mecánica?</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> El estudiante de Ingeniería Mecánica se formará en función de las tecnologías
              convencionales y de última generación, así como de los sistemas productivos.
              Su objetivo será crear, diseñar, operar y proteger equipos en un ambiente de estructuras funcionales que le permita
              adquirir competencias ingenieriles en empresas de clase mundial. Esto se logrará mediante un pensamiento crítico y el análisis de resultados,
              utilizando métodos, técnicas y procedimientos en conformidad con las normas vigentes. Esto se aplicará para llevar a cabo la medición y
              control operacional, así como una gestión eficiente de los recursos.
              <br>
              <br>
              Este enfoque le permitirá desarrollar proyectos, elaborar planes y programas de mantenimiento de equipos,
              coordinar su ejecución y mejorar las actividades de índole industrial. Esto, a su vez, contribuirá a elevar la calidad de la
              producción de bienes y servicios que la sociedad demanda.
            </p>
            <a class="btn btn-warning font-bold" href="?option=3" role="button">¡Saber más!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Fin Razones para estudiar la carrera -->

<!-- Areas de aprendizaje -->
<section class="lightSection bg-light p-5">
  <h2 class="sectionTitle text-center font-bold m-3">Áreas de aprendizaje</h2>
  <div class="sectionSeparator"></div>

  <p class="areaText">
    La formación del ingeniero mecánico incluye un soporte matemático importante y el conocimiento de materiales, cinemática de mecanismos,
    diseño estático y dinámico de sistemas y de máquinas, sistemas térmicos y de aire acondicionado, sistemas hidráulicos,
    instrumentación de control de procesos y máquinas.
    La educación en escuelas de Ingeniería y el desarrollo profesional en el campo de trabajo terminan de formar al ingeniero,
    el cual se especializa en algunas de las áreas de la ingeniería mecánica arriba mencionadas
    <br>
    <br>
    El ingeniero mecánico encuentra su campo de acción en las siguientes áreas:
  </p>

  <div class="row g-0">

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3.php">
          <img class="areaImage items-center" src="img/iconos/mantenimiento.PNG" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Mantenimiento de equipos mecánicos</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/iconos/analisisAplicacion.PNG" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Instrumentación y control de equipos y sistemas mecánicos</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3.php">
          <img class="areaImage items-center" src="img/iconos/ingenieria.PNG" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Diseño de equipos y sistemas mecánicos, térmicos, hidráulicos, neumáticos</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/iconos/OBJ9.PNG" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Operación de sistemas de producción</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/iconos/gestionMantenimiento.PNG" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Instalación y puesta en marcha de sistemas de producción</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4">
        <a href="?option=3">
          <img class="areaImage items-center" src="img/iconos/OBJ4.PNG" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Asesoría y ventas de equipos mecánicos, térmicos, hidráulicos, neumáticos</h3>
      </div>
    </div>

  </div>
</section>
<!-- Fin Áreas de aprendizaje-->


<!-- Instalaciones -->
<section class="darkSection bg-dark p-2 px-4">
  <div class="row mb-4 px-2 g-0">

    <div class="col-lg-6 col-12 py-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="titleDarkSection text-center font-bold m-3">Instalaciones</h2>
            <div class="darkSectionSeparator"></div>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="text-light" style="text-align: justify;">
              El departamento de metal - mecánica cuenta con diversos laboratorios dónde los
              estudiantes podrán desempañarse en desarrollar diversas aplicaciones y proyectos a lo largo de sus
              clases prácticas en la carrera de Ingeniería Mecanica. <br /><br />

              En cada laboratorio se encuentra personal de apoyo al maestro en turno para la supervisión y vigilancia en la realización de las practicas, así como para estar pendiente de que los alumnos acaten las normas y reglamentos del laboratorio.
            </p>
            <a class="btn btn-warning font-bold" href="?option=4" role="button">¡Explorar!</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/EdificioX.webp" alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Instalaciones-->

<!-- Comunidad docente  -->
<section class="p-2 bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-sm-12">
      <div class="galleryContainer bg-light">
        <div class="row g-0">
          <div class="col-4 px-2">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen1; ?>' alt="">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen2; ?>' alt="">
          </div>

          <div class="col-4 px-2">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen3; ?>' alt="">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen4; ?>' alt="">
          </div>

          <div class="col-4 px-2">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen5; ?>' alt="">
            <img class="img-fluid w-100 shadow-1-strong rounded m-2" src='<?php echo $docenteImagen6; ?>' alt="">
          </div>

        </div>
      </div>
    </div>

    <div class="lightSection col-lg-6 col-12 px-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Comunidad docente</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> Nuestros profesores son impulsores de cambio, son el elemento esencial de
              nuestra institución, contamos con profesores y profesoras de diversas disciplinas, quienes demuestran diariamente
              su compromiso más allá de las aulas. Son profesionales que tienen la facultad de transformar vidas, de impactar a
              las futuras generaciones de estudiantes.
            </p>
            <a class="btn btn-warning font-bold" href="?option=2" role="button">¡Conocer docentes!</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fin Comunidad docente -->

<!-- Enlaces -->
<section class="lightSection bg-light p-2">
  <h2 class="sectionTitle text-center font-bold m-3">Enlaces</h2>
  <div class="sectionSeparator"></div>

  <div class="row g-0">

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4 rounded-3">
        <a href="http://gestion.itver.edu.mx/servicio-social/" target="_blank">
          <img class="img-fluid w-100 shadow-1-strong rounded mb-4 p-1" src="img/servicioSocial.webp" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Servicio social</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4 rounded-3">
        <a href="http://www.veracruz.tecnm.mx/" target="_blank">
          <img class="img-fluid w-100 shadow-1-strong rounded mb-4  p-1" src="img/IMG_4446.webp" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">TECNM Veracruz</h3>
      </div>
    </div>

    <div class="col-lg-4 col-sm-6 text-center p-3">
      <div class="area shadow-sm p-4 rounded-3">
        <a href="?option=5">
          <img class="img-fluid w-90 shadow-1-strong rounded mb-4  p-1" src="img/IMG_80.webp" alt="">
        </a>
        <h3 class="areaTitle text-center font-bold text-xl">Comunidades</h3>
      </div>
    </div>

  </div>
</section>
<!-- Fin Enlaces -->

<!-- Área de redes sociales -->
<section class="lightSection p-2 g-0">
  <div class="row g-0">
    <div class="col">
      <h2 class="sectionTitle text-center font-bold m-3">Redes sociales</h2>
      <div class="sectionSeparator"></div>
    </div>
  </div>
</section>
<section class="p-2 g-0">
  <div class="row g-0">
    <div class="col-12 col-md-6">

      <h4 class="sectionTitle text-center font-bold">Tecnológico Nacional de México</h4>

      <div class="d-flex flex-row justify-content-center">
        <a class="mx-2" href="https://www.tecnm.mx/" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-column justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/tecnm-logo.PNG" alt="">
          </div>
        </a>
        <a class="mx-2" href="https://www.facebook.com/TecNMmx" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/facebook.PNG" alt="">
          </div>
        </a>
        <a class="mx-2" href="https://twitter.com/TecNM_Mx" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/twitterX.png" alt="">
          </div>
        </a>
        <a class="mx-2" href="https://www.youtube.com/user/SNESTMX" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/youtube.PNG" alt="">
          </div>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <h4 class="sectionTitle  text-center font-bold">Instituto Tecnológico de Veracruz</h4>
      <div class="d-flex flex-row justify-content-center">
        <a class="mx-2" href="https://www.veracruz.tecnm.mx/index.php" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/itver-logo.PNG" alt="">
          </div>
        </a>
        <a class="mx-2" href="https://www.facebook.com/ITVeracruz" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/facebook.PNG" alt="">
          </div>
        </a>
        <a class="mx-2" href="https://twitter.com/TecNM_Veracruz" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/twitterX.png" alt="">
          </div>
        </a>
        <a class="mx-2" href="https://www.youtube.com/channel/UCVBkOP_rj5ulvlriG88jTzA" target="_blank" style="text-decoration: none;">
          <div class="d-flex flex-row justify-content-center">
            <img class="img-fluid shadow-1-strong rounded mb-4 p-1" style="height: 40px" src="img/iconos/youtube.PNG" alt="">
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Fin Área de redes sociales -->