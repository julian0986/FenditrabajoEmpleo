<?php

class AplicacionOferta extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->ofertas = [];
        $this->loadModel('aspiracion');
    }

    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 1) {
            $this->view->ofertas = $this->model->listar($_SESSION['idUser']);
            $this->listarTres();
            $this->cursos();
            $this->view->render('aplicacion-oferta/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function cursos()
    {
        $this->loadModel('curso');
        $cursos = $this->model->listaUser();
        $this->view->cursos = $cursos;
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function aplicarOferta($param = null)
    {
        $idOferta = $param[0];
        $usuario = $_SESSION['idUser'];
        $correoE =  $this->model->obtener_correo($usuario);
        $fecha = date("Y-m-d"); 

       
        $a = $this->model->aplicarOferta(['oferta' => $idOferta, 'usuario' => $usuario, 'fecha' => $fecha]);
        
        if ($a) {
            //Aqui se va a colocar el codigo para la notificacion via correo 
            $to = $correoE;
            $from = 'From: soporte@fendipetroleo.com';
            $subject = 'Registrado de forma exitosa';
            $message = 'Bienvenido a Fenditrabajo https://empleo.fenditrabajo.com/loginPersona ';
             mail($to, $subject, $message, $from);

            echo "<script type='text/javascript'>alert('Aplicaste de forma exitosa');location.href = '" . constant('URL') . "aplicacionOferta';</script>";
        } else {
            echo "no se pudo aplicar con exito";
        }
    }

    function eliminarOferta($param = null)
    {
        $idOferta = $param[0];
        $usuario = $_SESSION['idUser'];
        if ($this->model->eliminar(['oferta' => $idOferta, 'usuario' => $usuario])) {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "aplicacionOferta';</script>";
        } else {
            echo "no se pudo aplicar con exito";
        }
    }
}