<?php

class CambioEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idEmp'])) {
            $this->listarTres();
            $this->view->render('cambio-empresa/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
        }
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function recuperar()
    {
        $this->loadModel('empresa');
        $passA = $_POST['passA'];
        $pass = $_POST['pass'];
        $passC = $_POST['passC'];
        if ($pass == $passC) {
            $empresa = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $md5passA = md5($passA);
            $respuesta = $this->model->loginEmpresa(['email' => $empresa->correo, 'password' => $md5passA]);
            if ($respuesta) {
                $md5pass = md5($pass);
                $respuesta = $this->model->cambiarContrasena(['correo' => $empresa->correo, 'pass' => $md5pass]);
                echo "<script type='text/javascript'>window.alert('La nueva contraseña se ha actualizado con éxito');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "inicioEmpresa';</script>";
            } else {
                echo "<script type='text/javascript'>window.alert('La contraseña actual es incorrecta');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "cambioEmpresa';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Las contraseñas no coinciden');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "cambioEmpresa';</script>";
        }
    }
}
