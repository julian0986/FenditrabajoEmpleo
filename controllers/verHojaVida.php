<?php

class VerHojaVida extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idEmp'])) {
            $this->loadModel('hojaVida');
            $hojaAux = $this->model->mostrar($_SESSION['idPer']);
            $this->view->hoja = $hojaAux;
            $this->mostrarExperiencia();
            $this->mostrarFormacion();
            $this->listarTres();
            $this->view->render('ver-hoja-vida/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
        }
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function verHojaVida($id)
    {
        $_SESSION['idPer'] = $id[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "verHojaVida';</script>";
    }

    function mostrarExperiencia()
    {
        $this->loadModel('experiencia');
        $usuario = $_SESSION['idPer'];
        $experiencias = $this->model->listar($usuario);
        $this->view->experiencias = $experiencias;
        unset($this->model);
    }

    function mostrarFormacion()
    {
        $this->loadModel('formacion');
        $usuario = $_SESSION['idPer'];
        $formaciones = $this->model->listar($usuario);
        $this->view->formaciones = $formaciones;
        unset($this->model);
    }
}
