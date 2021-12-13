<?php

class RegistroPersona extends Controller
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
        $this->view->render('registro-persona/index');
    }

    function nuevaPersona()
    {
        $this->loadModel('persona');
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $ip = getenv('REMOTE_ADDR');
        $navegador = getenv('HTTP_USER_AGENT');
        $fecha = date('l jS \of F Y h:i:s A');
        if ($this->model->nuevaPersona([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'password' => $password,
            'ip' => $ip,
            'navegador' => $navegador,
            'fecha' => $fecha
        ])) {
            echo "<script type='text/javascript'>alert('Se registro exitosamente');</script>;";
        } else {
            echo "<script type='text/javascript'>alert('El correo ya existe');</script>;";
        }
        $this->render();
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
}
