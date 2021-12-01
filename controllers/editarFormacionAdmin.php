<?php

class EditarFormacionAdmin extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('formacion');
            $formacion = $this->model->detalles($_SESSION['idFor']);
            $this->view->formacion = $formacion;
            $this->view->render('editar-formacion-admin/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function detalles($param = null)
    {
        $_SESSION['idFor'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarFormacionAdmin';</script>";
    }

    function editar()
    {
        $this->loadModel('formacion');
        $id = $_SESSION['idFor'];
        $tituloF = $_POST['tituloF'];
        $centro = $_POST['centro'];
        $nivel = $_POST['nivel'];
        $estado = $_POST['estado'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        if ($this->model->editar([
            'id' => $id,
            'tituloF' => $tituloF,
            'centro' => $centro,
            'nivel' => $nivel,
            'estado' => $estado,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaFin,
        ])) {
            echo "<script type='text/javascript'>alert('Se modifico con exito'); location.href = '" . constant('URL') . "editarUsuario';</script>";
        }
        $this->render();
    }
}
