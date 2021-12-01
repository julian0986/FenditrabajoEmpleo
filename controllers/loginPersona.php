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
            $_SESSION['idUser'] = $respuesta['idUser'];
            $_SESSION['rol'] = $respuesta['rol'];
            if($respuesta['rol'] == 1){
                echo "<script type='text/javascript'>location.href = '".constant('URL')."inicioPersona';</script>";
            }else{
                echo "<script type='text/javascript'>location.href = '".constant('URL')."inicioAdmin';</script>";
            }

            
        } else {
            echo "<script type='text/javascript'>window.alert('Correo o contraseña incorrectos');location.href = '".constant('URL')."loginPersona';</script>";
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
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
    }
}
