<?php

class HojaVidaUsuario extends Controller
{
    public $hojaAux;
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->hoja = [];
    }

    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 1) {
            $this->mostrarHoja();
            $this->mostrarExperiencia();
            $this->mostrarFormacion();
            $this->listarTres();
            $this->cursos();
            $this->view->render('hoja-vida-usuario/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
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

    function agregarHojaVida($param = null)
    {
        $this->loadModel('hojaVida');
        if (empty($param[0])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $tipoId = $_POST['tipoId'];
            $numeroId = $_POST['numeroId'];
            $fecha = date("Y-m-d", strtotime($_POST['fechaNacimiento']));;
            $ciudadNacimiento = $_POST['ciudadNacimiento'];
            $departamentoNacimiento = $_POST['departamentoNacimiento'];
            $paisNacimiento = $_POST['paisNacimiento'];
            $genero = $_POST['genero'];
            $estadoCivil = $_POST['estadoCivil'];
            $tipoTel = $_POST['tipoTel'];
            $telefono = $_POST['telefono'];
            $departamento = $_POST['departamento'];
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];
            $nacionalidad = $_POST['nacionalidad'];
            $ocupacion = $_POST['ocupacion'];
            $tipoPoblacion = $_POST['tipoPoblacion'];
            $cambioResidencia = $_POST['cambioResidencia'];
            $aspiracionSal = $_POST['aspiracionSal'];
            $tiempoExperiencia = $_POST['tiempoExperiencia'];
            $titulo = $_POST['titulo'];
            $perfil = $_POST['perfil'];
            $foto = $this->subirImagen($numeroId);
            if (!$foto) {
                $foto = "";
            }
            $persona = $_SESSION['idUser'];

            $mensaje = "";
            if ($this->model->agregarHoja([
                'nombre' => $nombre,
                'apellido' => $apellido,
                'tipoId' => $tipoId,
                'numeroId' => $numeroId,
                'fecha' => $fecha,
                'ciudadNacimiento' => $ciudadNacimiento,
                'departamentoNacimiento' => $departamentoNacimiento,
                'paisNacimiento' => $paisNacimiento,
                'genero' => $genero,
                'estadoCivil' => $estadoCivil,
                'tipoTel' => $tipoTel,
                'telefono' => $telefono,
                'departamento' => $departamento,
                'ciudad' => $ciudad,
                'direccion' => $direccion,
                'nacionalidad' => $nacionalidad,
                'ocupacion' => $ocupacion,
                'tipoPoblacion' => $tipoPoblacion,
                'cambioResidencia' => $cambioResidencia,
                'aspiracionSal' => $aspiracionSal,
                'tiempoExperiencia' => $tiempoExperiencia,
                'titulo' => $titulo,
                'perfil' => $perfil,
                'foto' => $foto,
                'persona' => $persona
            ])) {
                $this->loadModel('persona');
                if ($this->model->modificarPersona(['nombres' => $nombre, 'apellidos' => $apellido, 'id' => $persona])) {
                    echo "<script type='text/javascript'>alert('Se guardo con exito.');location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
                }
            }
        } else {
            $id = $param[0];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $tipoId = $_POST['tipoId'];
            $numeroId = $_POST['numeroId'];
            $fecha = date("Y-m-d", strtotime($_POST['fechaNacimiento']));;
            $ciudadNacimiento = $_POST['ciudadNacimiento'];
            $departamentoNacimiento = $_POST['departamentoNacimiento'];
            $paisNacimiento = $_POST['paisNacimiento'];
            $genero = $_POST['genero'];
            $estadoCivil = $_POST['estadoCivil'];
            $tipoTel = $_POST['tipoTel'];
            $telefono = $_POST['telefono'];
            $departamento = $_POST['departamento'];
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];
            $nacionalidad = $_POST['nacionalidad'];
            $ocupacion = $_POST['ocupacion'];
            $tipoPoblacion = $_POST['tipoPoblacion'];
            $cambioResidencia = $_POST['cambioResidencia'];
            $aspiracionSal = $_POST['aspiracionSal'];
            $tiempoExperiencia = $_POST['tiempoExperiencia'];
            $titulo = $_POST['titulo'];
            $perfil = $_POST['perfil'];
            $foto = $this->subirImagen($numeroId);
            if (!$foto) {
                $hojaAux = $hojaAux = $this->model->mostrar($_SESSION['idUser']);
                $foto = $hojaAux->foto;
            }
            $persona = $_SESSION['idUser'];
            if ($this->model->modificarHoja([
                'id' => $id,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'tipoId' => $tipoId,
                'numeroId' => $numeroId,
                'fecha' => $fecha,
                'ciudadNacimiento' => $ciudadNacimiento,
                'departamentoNacimiento' => $departamentoNacimiento,
                'paisNacimiento' => $paisNacimiento,
                'genero' => $genero,
                'estadoCivil' => $estadoCivil,
                'tipoTel' => $tipoTel,
                'telefono' => $telefono,
                'departamento' => $departamento,
                'ciudad' => $ciudad,
                'direccion' => $direccion,
                'nacionalidad' => $nacionalidad,
                'ocupacion' => $ocupacion,
                'tipoPoblacion' => $tipoPoblacion,
                'cambioResidencia' => $cambioResidencia,
                'aspiracionSal' => $aspiracionSal,
                'tiempoExperiencia' => $tiempoExperiencia,
                'titulo' => $titulo,
                'perfil' => $perfil,
                'foto' => $foto,
                'persona' => $persona
            ])) {
                $this->loadModel('persona');
                if ($this->model->modificarPersona(['nombres' => $nombre, 'apellidos' => $apellido, 'id' => $persona])) {
                    echo "<script type='text/javascript'>alert('Se guardo con exito.');location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
                }
            }
        }
    }

    function subirImagen($nit)
    {
        $directorio = "public/perfil/" . $nit . rand();
        if (isset($_FILES["file"]["name"])) {
        } else {
            return false;
        }
        $archivo = $directorio . basename($_FILES["file"]["name"]);

        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        if ($tipoArchivo) {
            $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);
            //var_dump($size);

            if ($checarSiImagen != false) {

                //validando tama??o del archivo
                $size = $_FILES["file"]["size"];

                if ($size > 1000000) {
                    echo "<script type='text/javascript'>alert('El archivo tiene que ser menor a 5 MB')</script>";
                } else {
                    //validar tipo de imagen
                    if ($tipoArchivo == "jpg" | $tipoArchivo == "jpeg" | $tipoArchivo == "png") {
                        // se valid?? el archivo correctamente
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

    function mostrarHoja()
    {
        $this->loadModel('hojaVida');
        if ($this->model->mostrar($_SESSION['idUser'])) {
            $hojaAux = $this->model->mostrar($_SESSION['idUser']);
            $this->view->hoja = $hojaAux;
        }
        unset($this->model);
    }


    function agregarExperiencia()
    {
        $this->loadModel('experiencia');
        $empresa = $_POST['empresa'];
        $exPais = $_POST['exPais'];
        $departamento = $_POST['departamento'];
        $exmunicipio = $_POST['exmunicipio'];
        $sector = $_POST['sector'];
        $cargo = $_POST['cargo'];
        $exocupacion = $_POST['exocupacion'];
        $area = $_POST['area'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $extotalexpe = $_POST['extotalexpe'];
        $experfil = $_POST['experfil'];
        $usuario = $_SESSION['idUser'];
        if ($this->model->agregar([
            'empresa' => $empresa,
            'exPais' => $exPais,
            'departamento' => $departamento,
            'exmunicipio' => $exmunicipio,
            'sector' => $sector,
            'cargo' => $cargo,
            'exocupacion' => $exocupacion,
            'area' => $area,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaFin,
            'extotalexpe' => $extotalexpe,
            'experfil' => $experfil,
            'usuario' => $usuario
        ])) {
            echo "<script type='text/javascript'>alert('Se agrego con ??xito.');location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
        }
    }

    function mostrarExperiencia()
    {
        $this->loadModel('experiencia');
        $usuario = $_SESSION['idUser'];
        $experiencias = $this->model->listar($usuario);
        $this->view->experiencias = $experiencias;
        unset($this->model);
    }

    function eliminar($param = null)
    {
        $this->loadModel('experiencia');
        $experiencia = $param[0];
        if ($this->model->eliminar($experiencia)) {
            echo "<script type='text/javascript'>alert('Se elimino con ??xito.');location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
        }
    }

    function mostrarFormacion()
    {
        $this->loadModel('formacion');
        $usuario = $_SESSION['idUser'];
        $formaciones = $this->model->listar($usuario);
        $this->view->formaciones = $formaciones;
        unset($this->model);
    }

    function eliminarFormacion($param = null)
    {
        $this->loadModel('formacion');
        $formacion = $param[0];
        if ($this->model->eliminar($formacion)) {
            echo "<script type='text/javascript'>alert('Se elimino con ??xito.');location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
        }
    }

    function agregarFormacion()
    {
        $this->loadModel('formacion');
        $tituloF = $_POST['tituloF'];
        $centro = $_POST['centro'];
        $nivel = $_POST['nivel'];
        $estado = $_POST['estado'];
        $profesion = $_POST['profesion'];
        $formacionPais = $_POST['formacionPais'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $usuario = $_SESSION['idUser'];
        if ($this->model->agregar([
            'tituloF' => $tituloF,
            'centro' => $centro,
            'nivel' => $nivel,
            'estado' => $estado,
            'profesion' => $profesion,
            'formacionPais' => $formacionPais,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaFin,
            'usuario' => $usuario
        ])) {
            echo "<script type='text/javascript'>alert('Se agrego con ??xito.');location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
        }
    }
}