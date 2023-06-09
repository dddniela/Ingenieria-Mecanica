<?php
require_once("src/Models/Seccion.php");
$seccion = new Seccion();
$seccion->setConnection($conn->getDB());

$objetivo = $seccion->getObjetivo();
?>
<!-- Portada -->
<div class="row g-0">
    <div class="position-relative w-100 overflow-hidden">
        <img class="w-100 img-fluid" src="img/ITVER-2.JPG" alt="">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="fw-bold text-warning shadow-text">Perfil de Egreso</h1>
                <h1 class="fw-bold text-light d-md-flex d-none shadow-text">Ingeniería Mecánica</h1>
            </div>
        </div>
    </div>
</div>
<!-- Fin Portada-->

<!-- Objetivo general -->
<section class="p-2">
    <div class="row px-2 g-0">
        <!-- <div class="col-lg-6 col-sm-12">
           <div class="galleryContainer bg-light">
                <div class="row g-0">
                    <div class="col-4 px-2">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/IMG_1335.webp" alt="">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/IMG_1394.webp" alt="">
                    </div>

                    <div class="col-4 px-2">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/IMG_1407.webp" alt="">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/IMG_1337.webp" alt="">
                    </div>

                    <div class="col-4 px-2">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/IMG_1363.webp" alt="">
                        <img class="img-fluid w-100 shadow-1-strong rounded m-2" src="img/IMG_1380.webp" alt="">
                    </div>

                </div>
            </div> 
        </div>-->
        <div class="col-lg-6 col-12 p-2 shadow-sm">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <img class="img-fluid rounded" src="img/IMG_7305.JPG" alt="">
            </div>
        </div>
        <div class="lightSection col-lg-6 col-12 p-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="row g-0">
                    <div class="col-12">
                        <h2 class="sectionTitle text-center font-bold m-3">
                            Objetivo general
                        </h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <p style="text-align: justify;">
                            <?php
                            if ($objetivo) {
                                echo $objetivo->descripcion;
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fin Objetivo general -->

<!-- Perfil de egreso -->
<div class="informationContainer">
    <div class="row g-0 align-items-center">
        <div class="col-lg-12">
            <!-- Puntos del perfil de egreso -->
            <section class="lightSection bg-light p-2">
                <h2 class="sectionTitle text-center font-bold m-3">Perfil de egreso</h2>
                <div class="sectionSeparator"></div>

                <div class="row g-0">
                    <?php
                    echo $seccion->imprimirPerfilEgreso();
                    ?>
                </div>
            </section>
            <!-- Fin Puntos del perfil de egreso -->

        </div>
    </div>
</div>
<!-- Fin Perfil de egreso-->