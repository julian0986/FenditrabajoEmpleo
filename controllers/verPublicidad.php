<?php

class VerPublicidad extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('publicidad');
            $publicidad = $this->model->detallesPublicidad($_SESSION['idPublicidad']);
            $this->view->publicidad = $publicidad;
            $this->view->render('ver-publicidad/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $_SESSION['idPublicidad'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "verPublicidad';</script>";
    }
}
