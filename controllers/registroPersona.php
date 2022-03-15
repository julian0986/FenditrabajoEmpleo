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
        $hashU = $this->generateToken();
        if ($this->model->nuevaPersona([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'password' => $password,
            'ip' => $ip,
            'navegador' => $navegador,
            'fecha' => $fecha,
            'us_hash' => $hashU
        ])) {
            $to = $_POST['email'];
            $from = 'From: soporte@fendipetroleo.com';
            $subject = 'Registrado de forma exitosa';
            $message = 'Bienvenido a Fenditrabajo https://empleo.fenditrabajo.com/activacionUser?token=' . $hashU;
            mail($to, $subject, $message, $from);
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
    
    public static function generateToken(){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i <= 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $key = implode($pass); //turn the array into a string
        return $key;
    }
}