<?php

class LoginEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->listarTres();
        $this->cursos();
        $this->view->render('login-empresa/index');
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function cursos()
    {
        $this->loadModel('curso');
        $cursos = $this->model->listaUser();
        $this->view->cursos = $cursos;
    }

    function loginEmpresa()
    {
        $this->loadModel('empresa');
        $email = $_POST['email'];
        $password  = $_POST['password'];
        $md5pass = md5($password);
        $respuesta = $this->model->loginEmpresa(['email' => $email, 'password' => $md5pass]);
        if ($respuesta) {
            if ($respuesta['estado'] == 1) {
                echo "<script type='text/javascript'>window.alert('La cuenta aun está en proceso de validación.');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
            } else {
                $_SESSION['idEmp'] = $respuesta['idEmp'];
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "inicioEmpresa';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Correo o contraseña incorrectos');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
        }
    }
    function nuevaEmpresa()
    {
        $this->loadModel('empresa');
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $nombre = $_POST['nombre'];
        $nit = $_POST['nit'];
        $correoCon = $_POST['correoCon'];
        $descripcion = $_POST['descripcion'];
        $departamento = $_POST['departamento'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $logo = $this->subirImagen($nit);
        if (!$logo) {
            $logo = "";
        }
        $nombreE = $_POST['nombreE'];
        $apellidoE = $_POST['apellidoE'];
        $cargoE = $_POST['cargoE'];
        $correoE = $_POST['correoE'];
        $telefonoE = $_POST['telefonoE'];

        if ($this->model->nuevaEmpresa([
            'email' => $email,
            'password' => $password,
            'nombre' => $nombre,
            'nit' => $nit,
            'descripcion' => $descripcion,
            'correoCon' => $correoCon,
            'departamento' => $departamento,
            'ciudad' => $ciudad,
            'direccion' => $direccion,
            'logo' => $logo,
            'nombreE' => $nombreE,
            'apellidoE' => $apellidoE,
            'cargoE' => $cargoE,
            'correoE' => $correoE,
            'telefonoE' => $telefonoE
        ])) {
            echo "<script type='text/javascript'>window.alert('Se registro exitosamente');</script>";
        } else {
            echo "<script type='text/javascript'>window.alert('El correo ya existe');</script>";
        }
        $this->render();
    }

    function subirImagen($nit)
    {
        $directorio = "public/logos/" . $nit . rand();
        if (isset($_FILES["file"]["name"])) {
        } else {
            return false;
        }
        $archivo = $directorio . basename($_FILES["file"]["name"]);

        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        // valida que es imagen
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
    }

    function cerrarSesion()
    {
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
    }
}
