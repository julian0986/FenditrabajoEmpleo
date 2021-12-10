<?php

class EditarExperiencia extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 1) {
            $this->loadModel('experiencia');
            $experiencia = $this->model->detalles($_SESSION['idExp']);
            $this->view->experiencia = $experiencia;
            $this->listarTres();
            $this->view->render('editar-experiencia/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }
    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function detalles($param = null)
    {
        $_SESSION['idExp'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarExperiencia';</script>";
    }

    function editar()
    {
        $this->loadModel('experiencia');
        $id = $_SESSION['idExp'];
        $empresa = $_POST['empresa'];
        $exPais = $_POST['exPais'];
        $departamento = $_POST['departamento'];
        $exmunicipio = $_POST['exmunicipio'];
        $sector = $_POST['sector'];
        $cargo = $_POST['cargo'];
        $exocupacion = $_POST['exocupacion'];
        $area = $_POST['area'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $extotalexpe = $_POST['extotalexpe'];
        $experfil = $_POST['experfil'];
        if ($this->model->editar([
            'id' => $id,
            'empresa' => $empresa,
            'exPais' => $exPais,
            'departamento' => $departamento,
            'exmunicipio' => $exmunicipio,
            'sector' => $sector,
            'cargo' => $cargo,
            'exocupacion' => $exocupacion,
            'area' => $area,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaFin,
            'extotalexpe' => $extotalexpe,
            'experfil' => $experfil
            
        ])) {
            echo "<script type='text/javascript'>alert('Se modifico con exito'); location.href = '" . constant('URL') . "hojaVidaUsuario';</script>";
        }
        $this->render();
    }
}