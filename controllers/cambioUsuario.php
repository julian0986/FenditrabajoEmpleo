<?php

class CambioUsuario extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 1) {
            $this->listarTres();
            $this->view->render('cambio-usuario/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
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
        $this->loadModel('persona');
        $passA = $_POST['passA'];
        $pass = $_POST['pass'];
        $passC = $_POST['passC'];
        if ($pass == $passC) {
            $persona = $this->model->informacionPersona($_SESSION['idUser']);
            $md5passA = md5($passA);
            $respuesta = $this->model->loginPersona(['email' => $persona['email'], 'password' => $md5passA]);
            if ($respuesta) {
                $md5pass = md5($pass);
                $respuesta = $this->model->cambiarContrasena(['correo' => $persona['email'], 'pass' => $md5pass]);
                echo "<script type='text/javascript'>window.alert('La nueva contraseña se ha actualizado con éxito');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "inicioPersona';</script>";
            } else {
                echo "<script type='text/javascript'>window.alert('La contraseña actual es incorrecta');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "cambioUsuario';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Las contraseñas no coinciden');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "cambioUsuario';</script>";
        }
    }
}
