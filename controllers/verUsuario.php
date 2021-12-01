<?php

class VerUsuario extends Controller
{
    public $id = "";

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('hojaVida');
            $hoja = $this->model->mostrar($this->id);
            $this->view->hoja = $hoja;
            $this->view->render('ver-usuario/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $this->id = $param[0];
        $this->render();
    }
}
