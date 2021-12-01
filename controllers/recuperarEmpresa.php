<?php

class RecuperarEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        $this->view->render('recuperar-empresa/index');
    }

    function recuperar()
    {
        $this->loadModel('empresa');
        $email = $_POST['correo'];
        $pass = substr(md5(microtime()), 1, 8);
        $md5pass = md5($pass);
        $respuesta = $this->model->cambiarContrasena(['correo' => $email, 'pass' => $md5pass]);
        if ($respuesta) {
            $to = $_POST['correo'];
            $from = 'From: soporte@fendipetroleo.com';
            $subject = 'Recuperar contraseña';
            $message = 'El sistema le asigno esta nueva contraseña: ' . $pass;

            mail($to, $subject, $message, $from);
            echo "<script type='text/javascript'>window.alert('La nueva contraseña a sido enviada a su correo, por favor verifique en los correos no deseados.');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        } else {
            $this->view->render('recuperar-empresa/index');
        }
    }
}
