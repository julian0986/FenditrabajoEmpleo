<?php

class VerCurso extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('curso');
            $curso = $this->model->detallesCurso($_SESSION['idCurso']);
            $this->view->curso = $curso;
            $this->view->render('ver-curso/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $_SESSION['idCurso'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "verCurso';</script>";
    }
}
