<?php

class PerfilEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idEmp']))
        {
            $this->loadModel('empresa');
            $empresa                = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $this->view->empresa    = $empresa;
            $this->listarTres();
            $this->cursos();
            $this->view->render('perfil-empresa/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
        }
    }

    function cursos()
    {
        $this->loadModel('curso');
        $cursos = $this->model->listaUser();
        $this->view->cursos = $cursos;
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function editarPerfil()
    {
        $this->loadModel('empresa');
        $nombre         = $_POST['nombre'];
        $nit            = $_POST['nit'];
        $correoCon      = $_POST['correoCon'];
        $descripcion    = $_POST['descripcion'];
        $departamento   = $_POST['departamento'];
        $ciudad         = $_POST['ciudad'];
        $direccion      = $_POST['direccion'];
        $logo           = $this->subirImagen($nit);
        if (!$logo) 
        {
            $empresa    = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $logo       = $empresa->isotipo;
        }
        $nombreE        = $_POST['nombreE'];
        $apellidoE      = $_POST['apellidoE'];
        $cargoE         = $_POST['cargoE'];
        $correoE        = $_POST['correoE'];
        $telefonoE      = $_POST['telefonoE'];
        $nombreEds      = $_POST['nombreEds'];
        $sicomEds      = $_POST['sicomEds'];
        $telEds      = $_POST['telEds'];
        $afiliadoEds      = $_POST['afiliadoEds'];
        $dependenciaEds      = $_POST['dependenciaEds'];
        $arlEds      = $_POST['arlEds'];
        $nivelRiesgoEds      = $_POST['nivelRiesgoEds'];
        $numEmpleadosEds      = $_POST['numEmpleadosEds'];
        $tipoDocuContacto      = $_POST['tipoDocuContacto'];
        $numDocuContacto      = $_POST['numDocuContacto'];
        
        if ($this->model->editarEmpresa([
            'id'            => $_SESSION['idEmp'],
            'nombre'        => $nombre,
            'nit'           => $nit,
            'correoCon'     => $correoCon,
            'descripcion'   => $descripcion,
            'departamento'  => $departamento,
            'ciudad'        => $ciudad,
            'direccion'     => $direccion,
            'logo'          => $logo,
            'nombreE'       => $nombreE,
            'apellidoE'     => $apellidoE,
            'cargoE'        => $cargoE,
            'correoE'       => $correoE,
            'telefonoE'     => $telefonoE,
            'nombreEds'     => $nombreEds,
            'sicomEds'     => $sicomEds,
            'telEds'     => $telEds,
            'afiliadoEds'     => $afiliadoEds,
            'dependenciaEds'     => $dependenciaEds,
            'arlEds'     => $arlEds,
            'nivelRiesgoEds'     => $nivelRiesgoEds,
            'numEmpleadosEds'     => $numEmpleadosEds,
            'tipoDocuContacto'     => $tipoDocuContacto,
            'numDocuContacto'     => $numDocuContacto
        ])) 
        {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "perfilEmpresa';</script>";
        } else {
            echo "error";
        }
    }

    function subirImagen($nit)
    {
        $directorio = "public/logos/" . $nit . rand();
        if (isset($_FILES["file"]["name"])) {
        } else {
            return false;
        }
        $archivo        = $directorio . basename($_FILES["file"]["name"]);
        $tipoArchivo    = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        if ($tipoArchivo)
        {
            $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);
            //var_dump($size);

            if ($checarSiImagen != false) {

                //validando tamaño del archivo
                $size = $_FILES["file"]["size"];

                if ($size > 1000000) {
                    echo "<script type='text/javascript'>alert('El archivo tiene que ser menor a 10 MB')</script>";
                } else {
                    //validar tipo de imagen
                    if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
                        // se validó el archivo correctamente
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
                            return $archivo;
                        } else {
                            echo "<script type='text/javascript'>alert('Hubo un error en la subida del archivo')</script>";
                        }
                    } else {
                        echo "<script type='text/javascript'>alert('Solo se admiten archivos jpg/jpeg/png')</script>";
                    }
                }
            } else {
                echo "<script type='text/javascript'>alert('El documento no es una imagen')</script>";
            }
        } else {
            return false;
        }
    }
}