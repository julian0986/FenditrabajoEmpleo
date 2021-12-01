<?php

class EditarUsuario extends Controller
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
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->mostrarHoja();
            $this->view->render('editar-usuario/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $_SESSION['idUserE'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarUsuario';</script>";
    }

    function agregarHojaVida($param = null)
    {
        $this->loadModel('hojaVida');
        if ($param[0] == '') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $tipoId = $_POST['tipoId'];
            $numeroId = $_POST['numeroId'];
            $fecha = date("Y-m-d", strtotime($_POST['fechaNacimiento']));;
            $genero = $_POST['genero'];
            $estadoCivil = $_POST['estadoCivil'];
            $tipoTel = $_POST['tipoTel'];
            $telefono = $_POST['telefono'];
            $departamento = $_POST['departamento'];
            $direccion = $_POST['direccion'];
            $nacionalidad = $_POST['nacionalidad'];
            $titulo = $_POST['titulo'];
            $perfil = $_POST['perfil'];
            $foto = "";
            $urlHoja = $this->subirDocumento($numeroId);
            if (!$urlHoja) {
                $urlHoja = "";
            }
            $persona = $_SESSION['idUserE'];

            if ($this->model->agregarHoja([
                'nombre' => $nombre,
                'apellido' => $apellido,
                'tipoId' => $tipoId,
                'numeroId' => $numeroId,
                'fecha' => $fecha,
                'genero' => $genero,
                'estadoCivil' => $estadoCivil,
                'tipoTel' => $tipoTel,
                'telefono' => $telefono,
                'departamento' => $departamento,
                'direccion' => $direccion,
                'nacionalidad' => $nacionalidad,
                'titulo' => $titulo,
                'perfil' => $perfil,
                'foto' => $foto,
                'urlHoja' => $urlHoja,
                'persona' => $persona
            ])) {
                $this->loadModel('persona');
                if ($this->model->modificarPersona(['nombres' => $nombre, 'apellidos' => $apellido, 'id' => $persona])) {
                    echo "<script type='text/javascript'>alert('Se guardo con exito.');location.href = '" . constant('URL') . "crudUsuarios';</script>";
                }
            }
        } else {
            $id = $param[0];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $tipoId = $_POST['tipoId'];
            $numeroId = $_POST['numeroId'];
            $fecha = date("Y-m-d", strtotime($_POST['fechaNacimiento']));;
            $genero = $_POST['genero'];
            $estadoCivil = $_POST['estadoCivil'];
            $tipoTel = $_POST['tipoTel'];
            $telefono = $_POST['telefono'];
            $departamento = $_POST['departamento'];
            $direccion = $_POST['direccion'];
            $nacionalidad = $_POST['nacionalidad'];
            $titulo = $_POST['titulo'];
            $perfil = $_POST['perfil'];
            $hojaAux = $hojaAux = $this->model->mostrar($_SESSION['idUserE']);
            $foto = $hojaAux->foto;
            $urlHoja = $this->subirDocumento($numeroId);
            if (!$urlHoja) {
                $hojaAux = $hojaAux = $this->model->mostrar($_SESSION['idUserE']);
                $urlHoja = $hojaAux->urlHoja;
            }
            $persona = $_SESSION['idUserE'];
            if ($this->model->modificarHoja([
                'id' => $id,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'tipoId' => $tipoId,
                'numeroId' => $numeroId,
                'fecha' => $fecha,
                'genero' => $genero,
                'estadoCivil' => $estadoCivil,
                'tipoTel' => $tipoTel,
                'telefono' => $telefono,
                'departamento' => $departamento,
                'direccion' => $direccion,
                'nacionalidad' => $nacionalidad,
                'titulo' => $titulo,
                'perfil' => $perfil,
                'foto' => $foto,
                'urlHoja' => $urlHoja,
                'persona' => $persona
            ])) {
                $this->loadModel('persona');
                if ($this->model->modificarPersona(['nombres' => $nombre, 'apellidos' => $apellido, 'id' => $persona])) {
                    echo "<script type='text/javascript'>alert('Se guardo con exito.');location.href = '" . constant('URL') . "crudUsuarios';</script>";
                }
            }
        }
    }

    function subirDocumento($nit)
    {
        $directorio = "public/hojaVida/" . $nit . rand();
        if (!isset($_FILES["docHoja"]["name"])) {
            return false;
        }
        $archivo = $directorio . basename($_FILES["docHoja"]["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        if ($tipoArchivo) {
            $size = $_FILES["docHoja"]["size"];
            if ($size > 10000000) {
                echo "<script type='text/javascript'>alert('El archivo tiene que ser menor a 10 MB')</script>";
            } else {
                //validar tipo de imagen
                if ($tipoArchivo == "pdf" || $tipoArchivo == "doc" || $tipoArchivo == "docx") {
                    // se validó el archivo correctamente
                    if (move_uploaded_file($_FILES["docHoja"]["tmp_name"], $archivo)) {
                        return $archivo;
                    } else {
                        echo "<script type='text/javascript'>alert('Hubo un error en la subida del archivo')</script>";
                    }
                } else {
                    echo "<script type='text/javascript'>alert('Solo se admiten archivos pdf/doc/docx')</script>";
                }
            }
        }
    }

    function mostrarHoja()
    {
        $this->loadModel('hojaVida');
        if ($this->model->mostrar($_SESSION['idUserE'])) {
            $hojaAux = $this->model->mostrar($_SESSION['idUserE']);
            $this->view->hoja = $hojaAux;
        }
        unset($this->model);
    }

    function cambio()
    {
        $this->loadModel('persona');
        $pass = $_POST['clave'];
        $passC = $_POST['conf'];
        if ($pass == $passC) {
            $persona = $this->model->informacionPersona($_SESSION['idUserE']);
            $md5pass = md5($pass);
            $respuesta = $this->model->cambiarContrasena(['correo' => $persona['email'], 'pass' => $md5pass]);
            if ($respuesta) {
                echo "<script type='text/javascript'>window.alert('La nueva contraseña se ha actualizado con éxito');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarUsuario';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Las contraseñas no coinciden');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarUsuario';</script>";
        }
    }
}
