<?php

require_once "Conexion.php";

class Materia
{
    private $materiaId;
    private $programaId;
    private $especialidadId;
    private $nombre;
    private $area;
    private $semestre;
    private $competencia;
    private $urlVideo;
    private $urlPrograma;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    function icono($Area)
    {
        $ruta_img = "";
        switch ($Area) {
            case 'Programacion':
                $ruta_img = 'programacion.PNG';
                break;
            case 'Dibujo Mecanico':
                $ruta_img = 'dibujoMecanico.PNG';
                break;
            case 'Metrologia':
                $ruta_img = 'metrologia.PNG';
                break;
            case 'Materiales metalicos':
                $ruta_img = 'materialesMetalicos.PNG';
                break;
            case 'Materiales no metalicos':
                $ruta_img = 'materialesNoMetalicos.PNG';
                break;
            case 'Calidad':
                $ruta_img = 'calidad.PNG';
                break;
            case 'Estatica':
                $ruta_img = 'estatica.PNG';
                break;
            case 'Electromagnetismo':
                $ruta_img = 'electromagnetismo.PNG';
                break;
            case 'Manufactura':
                $ruta_img = 'manufactura.PNG';
                break;
            case 'Dinamica':
                $ruta_img = 'dinamica.PNG';
                break;
            case 'Termodinamica':
                $ruta_img = 'termodinamica.PNG';
                break;
            case 'Mecanica Materiales':
                $ruta_img = 'mecanicaMateriales.PNG';
                break;
            case 'Mecanismos':
                $ruta_img = 'mecanismos.PNG';
                break;
            case 'Mecanica fluidos':
                $ruta_img = 'mecanicaFluidos.PNG';
                break;
            case 'Transferencia de Calor':
                $ruta_img = 'transferenciaCalor.PNG';
                break;
            case 'Instalaciones Hidraulicas':
                $ruta_img = 'instalacionesHidraulicas.PNG';
                break;
            case 'Instrumentacion':
                $ruta_img = 'instrumentacion.PNG';
                break;
            case 'Vibraciones':
                $ruta_img = 'vibraciones.PNG';
                break;
            case 'Seguridad industrial':
                $ruta_img = 'seguridadIndustrial.PNG';
                break;
            case 'Fluidos compresibles':
                $ruta_img = 'compresibles.PNG';
                break;
            case 'Fluidos incompresibles':
                $ruta_img = 'incompresibles.PNG';
                break;
            case 'Automatizacion industrial':
                $ruta_img = 'automatizacionIndustrial.PNG';
                break;
            case 'Mantenimiento':
                $ruta_img = 'mantenimiento.PNG';
                break;
            case 'Energia':
                $ruta_img = 'energia.PNG';
                break;
            case 'Refrigeracion':
                $ruta_img = 'refrigeracion.PNG';
                break;
            case 'Asignaturas Comunes':
                $ruta_img = 'asignaturas-comunes.PNG';
                break;
            case 'Electronica':
                $ruta_img = 'electronica.PNG';
                break;
            case 'Ingenieria':
                $ruta_img = 'ingenieria.PNG';
                break;
            case 'Calculo':
                $ruta_img = 'calculo.PNG';
                break;
            case 'Estadistica':
                $ruta_img = 'estadistica.PNG';
                break;
            case 'Investigacion':
                $ruta_img = 'investigacion.PNG';
                break;
            case 'Matematicas Aplicada':
                $ruta_img = 'algebra.PNG';
                break;
            case 'Administracion':
                $ruta_img = 'administracion.PNG';
                break;
            default:
                $ruta_img = 'circuloDeLectura.PNG';
                break;
        }
        return $ruta_img;
    }

    public function getMateriasBySemestre($semestre)
    {
        $url =  $GLOBALS['api'] . '/api/materia/getMateriasBySemestre';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId'],
            'semestre' => $semestre,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    function imprimir($semestre)
    {
        $materias = $this->getMateriasBySemestre($semestre);

        $tabla = "<div class='row justify-content-md-start justify-content-center'>";

        foreach ($materias['data'] as $materia) {
            $materiaId = $materia['materiaId'];
            $nombre = $materia['nombre'];
            $competencia = $materia['competencia'];
            $area = $materia['area'];
            $urlVideo = $materia['urlVideo'];
            $urlPrograma = $materia['urlPrograma'];
            $ruta_img = $this->icono($area);

            // Cuadro de materia
            $tabla .= "<div class='col-lg-4 col-md-6 col-sm-9 col-9 p-4 h-100 justify-content-center rounded-3'>
                <div class='row azul-medio' style='height: 88px;'>
                    <div class='d-flex justify-content-center h-100'>
                        <h5 class='text-white align-self-center rounded-top text-center font-semibold py-3'>$nombre</h5>
                    </div>
                </div>
                <div class='row bg-light overflow-hidden d-none d-sm-flex' style='height: 110px;'>
                    <div class='col-md-3 col-12 justify-content-center align-items-start'>
                        <div class='d-flex flex-row justify-content-center align-items-start h-100'>
                            <img class='h-16 p-1 mt-4 ms-4' src='img/iconos/$ruta_img' alt=''>
                        </div>
                    </div>
                    <div class='col-md-9 col-12 justify-content-center align-items-center'>
                        <div class='d-flex flex-row justify-content-center align-items-center h-100 text-wrap'>
                            <p class='text-sm mx-4 my-2' style='text-align: justify;'>$competencia</p>
                        </div>
                    </div>
                </div>  
                <div class='row bg-light'>
                    <div class='col-12 my-2 justify-content-center'>
                        <div class='d-flex p-2 justify-content-center align-items-center'>
                        <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal'
                            data-bs-target='#modalReticula' 
                                    data-materia ='$nombre' 
                                    data-videoMateria ='$urlVideo' 
                                    data-descMateria ='$competencia'
                                    data-urlMateria ='$urlPrograma'
                                    data-id='$materiaId'
                                    onclick='youtubePlay(this)'>
                                    Ver más </button>
                                </div>
                            </div>
                        </div>
                    </div>";
        }
        $tabla .= "</div>";

        return $tabla;
    }

    function imprimir1erSemestre()
    {
        return $this->imprimir(1);
    }

    function imprimir2doSemestre()
    {
        return $this->imprimir(2);
    }

    function imprimir3erSemestre()
    {
        return $this->imprimir(3);
    }

    function imprimir4toSemestre()
    {
        return $this->imprimir(4);
    }

    function imprimir5toSemestre()
    {
        return $this->imprimir(5);
    }

    function imprimir6toSemestre()
    {
        return $this->imprimir(6);
    }

    function imprimir7moSemestre()
    {
        return $this->imprimir(7);
    }

    function imprimir8voSemestre()
    {
        return $this->imprimir(8);
    }

    function imprimir9noSemestre()
    {
        return $this->imprimir(9);
    }
}
