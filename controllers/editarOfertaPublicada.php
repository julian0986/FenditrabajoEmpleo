<?php

class EditarOfertaPublicada extends Controller
{



    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->loadModel('oferta');
        $ofertaId = $_SESSION['idOferta'];
        $oferta = $this->model->ofertaId($ofertaId);
        $this->view->oferta = $oferta;
        $this->view->render('editar-oferta-publicada/index');
    }

    function verEditar($param = null)
    {
        $_SESSION['idOferta'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "editarOfertaPublicada';</script>";
    }

    function editar()
    {
        $this->loadModel('oferta');
        $id = $_SESSION['idOferta'];
        $nombre = $_POST['nombre'];
        $departamento = $_POST['departamento'];
        $municipio = $_POST['municipio'];
        $salario = $_POST['salario'];
        $jornada = $_POST['jornada'];
        $descripcion = $_POST['descripcion'];
        if ($this->model->editar([
            'id' => $id,
            'nombre' => $nombre,
            'departamento' => $departamento,
            'municipio' => $municipio,
            'salario' => $salario,
            'jornada' => $jornada,
            'descripcion' => $descripcion,
        ])) {
            echo "<script type='text/javascript'>alert('Se modifico con exito.');location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
        }
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
    }
}
