<?php

class Contactenos extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->listarTres();
        $this->cursos();
        $this->view->render('contactenos/index');
    }

    function contactos (){
        if(isset($_POST['envio'])) {
            if(!empty($_POST['pqr_nombre']) && !empty($_POST['pqr_apellido']) && !empty($_POST['pqr_tel']) && !empty($_POST['pqr_mail']) && !empty($_POST['pqr_asunto'])) {
            $pqr_nombre = $_POST['pqr_nombre'];
            $pqr_apellido = $_POST['pqr_apellido'];
            $pqr_tel = $_POST['pqr_tel'];
            $pqr_mail = $_POST['pqr_mail'];
            $pqr_asunto = $_POST['pqr_asunto'];
            if (([
                'pqr_nombre' => $pqr_nombre,
                'pqr_apellido' => $pqr_apellido,
                'pqr_tel' => $pqr_tel,
                'pqr_mail' => $pqr_mail,
                'pqr_asunto' => $pqr_asunto
               
            ])) {
                $to = 'to:jairocastiblancos@gmail.com';
                $from = 'From: soporte@fendipetroleo.com';
                $subject = 'pqr';
                $message = '
                ¡Gracias por comunicarte con nosostros!
                Revisaremos tu inquietud
                ------------------------------
                Nombre:  '.$pqr_nombre.'
                Apellido: '.$pqr_apellido.'
                Telefono: '.$pqr_tel.'
                email: '.$pqr_mail.'
                -------------------------------
                Novedad: '.$pqr_asunto.'';
                mail($to, $subject, $message, $from);
                echo "<script type='text/javascript'>window.alert('Enviado exitosamente');</script>";
            } else {
                echo "<script type='text/javascript'>window.alert('No se logro enviar el mensaje');</script>";
            }
            $this->render();
            }
           
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
}