<?php

class VerEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->empresa = "";
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('empresa');
            $empresa = $this->model->informacionEmpresa($_SESSION['idEmpresa']);
            $this->view->empresa = $empresa;
            $this->view->render('ver-empresa/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $_SESSION['idEmpresa'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "verEmpresa';</script>";
    }

    function cambiarEstado()
    {
        $this->loadModel('empresa');
        $empresa = $this->model->informacionEmpresa($_SESSION['idEmpresa']);
        $id = $empresa->id;
        $estado = $empresa->estado;
        if ($estado == 1) {
            $estado = 2;
        } else {
            $estado = 1;
        }        
        $this->model->cambiarEstado([
            'id' => $id,
            'estado' => $estado
        ]);
        echo "<script type='text/javascript'>window.alert('El estado se cambió con éxito');location.href = '" . constant('URL') . "crudEmpresas';</script>";
    }
}
