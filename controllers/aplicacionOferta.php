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
        $correoUs =  $this->model->obtener_correo_usuario($usuario);
        $correoEm =  $this->model->obtener_correo_empresa($idOferta);
        $ValidarEstado =  $this->model->validar_estado_aplicacion($idOferta, $usuario);
        $validarHojaVida = $this->model->validar_estado_hojaVida($usuario);
        $fecha = date("Y-m-d"); 
        
        $correoEm['em_correo_e'];
        $correoEm['of_nombre'];
        
    

        
        if(!$ValidarEstado) {
          
        echo "<script type='text/javascript'>alert('Ya estas aplicando a esta oferta');location.href = '" . constant('URL') . "aplicacionOferta';</script>";
        } if($validarHojaVida < 1){

        echo "<script type='text/javascript'>alert('primero registra tu hoja de vida para aplicar a las ofertas');location.href = '" . constant('URL') . "inicioPersona';</script>";
         } else {
        
        $this->model->aplicarOferta(['oferta' => $idOferta, 'usuario' => $usuario, 'fecha' => $fecha]);

        
            //Aqui se va a colocar el codigo para la notificacion via correo 
            $to = $correoUs;
            $from = 'From: soporte@fendipetroleo.com';
            $subject = 'Registrado de forma exitosa';
            $message = 'Bienvenido a Fenditrabajo https://empleo.fenditrabajo.com/loginPersona ';
             mail($to, $subject, $message, $from);

            $to = $correoEm['em_correo_e'];
            $from = 'From: soporte@fendipetroleo.com';
            $subject = 'Registrado de forma exitosa';
            $message = 'Bienvenido a Fenditrabajo https://empleo.fenditrabajo.com/loginPersona ';
             mail($to, $subject, $message, $from);

            echo "<script type='text/javascript'>alert('Aplicaste de forma exitosa');location.href = '" . constant('URL') . "aplicacionOferta';</script>";
            
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