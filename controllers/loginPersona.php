<?php

class LoginPersona extends Controller
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
        $this->view->render('login-persona/index');
    }

    function login()
    {        
        $this->loadModel('persona');
        $email = $_POST['email'];
        $password  = $_POST['password'];
        $md5pass = md5($password);
        $respuesta = $this->model->loginPersona(['email' => $email, 'password' => $md5pass]);
        if ($respuesta) {
           
            if($respuesta['rol'] != 1) {
                echo "<script type='text/javascript'>location.href = '".constant('URL')."inicioAdmin';</script>";
            }
            if ($respuesta['us_estado'] == 1) {
                echo "<script type='text/javascript'>window.alert('activa tu cuenta desde tu correo');location.href = '".constant('URL')."loginPersona';</script>";

        } else {
            $_SESSION['idUser'] = $respuesta['idUser'];
            $_SESSION['rol'] = $respuesta['rol'];
            echo "<script type='text/javascript'>location.href = '".constant('URL')."inicioPersona';</script>";
        }
            
        } else {
            //echo "<script type='text/javascript'>window.alert('Correo o contraseña incorrectos');location.href = '".constant('URL')."loginPersona';</script>";
            $message = "Correo o contraseña incorrectos";
            //$this->view->render('login-persona/index',$data);
            require_once("./views/login-persona/index.php");
        }


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

    function cerrarSesion()
    {
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "buscarTrabajo';</script>";
    }
}