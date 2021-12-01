<?php

class EditarEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('empresa');
            $empresa = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $this->view->empresa = $empresa;
            $this->view->render('editar-empresa/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $_SESSION['idEmp'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarEmpresa';</script>";
    }

    function editarPerfil()
    {
        $this->loadModel('empresa');
        $nombre = $_POST['nombre'];
        $nit = $_POST['nit'];
        $correoCon = $_POST['correoCon'];
        $descripcion = $_POST['descripcion'];
        $departamento = $_POST['departamento'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $empresa = $this->model->informacionEmpresa($_SESSION['idEmp']);
        $logo = $empresa->isotipo;
        $nombreE = $_POST['nombreE'];
        $apellidoE = $_POST['apellidoE'];
        $cargoE = $_POST['cargoE'];
        $correoE = $_POST['correoE'];
        $telefonoE = $_POST['telefonoE'];

        if ($this->model->editarEmpresa([
            'id' => $_SESSION['idEmp'],
            'nombre' => $nombre,
            'nit' => $nit,
            'correoCon' => $correoCon,
            'descripcion' => $descripcion,
            'departamento' => $departamento,
            'ciudad' => $ciudad,
            'direccion' => $direccion,
            'logo' => $logo,
            'nombreE' => $nombreE,
            'apellidoE' => $apellidoE,
            'correoE' => $correoE,
            'cargoE' => $cargoE,
            'telefonoE' => $telefonoE
        ])) {
            echo "<script type='text/javascript'>alert('Se actualizo correctamente');location.href = '" . constant('URL') . "crudEmpresas';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Se presentó un error inténtelo más tarde');location.href = '" . constant('URL') . "crudEmpresas';</script>";
        }
    }


    function cambio()
    {
        $this->loadModel('empresa');
        $pass = $_POST['clave'];
        $passC = $_POST['conf'];
        if ($pass == $passC) {
            $empresa = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $md5pass = md5($pass);
            $respuesta = $this->model->cambiarContrasena(['correo' => $empresa->correo, 'pass' => $md5pass]);
            if ($respuesta) {
                echo "<script type='text/javascript'>window.alert('La nueva contraseña se ha actualizado con éxito');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarEmpresa';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Las contraseñas no coinciden');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarEmpresa';</script>";
        }
    }
}
