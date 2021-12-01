<?php


class DetalleOferta extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->loadModel('oferta');
        $oferta = $this->model->ofertaId($_SESSION['idOferta']);
        $this->view->oferta = $oferta;
        $this->listarTres();
        $this->cursos();
        $this->view->render('detalle-oferta/index');
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

    function detalle($param = null)
    {
        $_SESSION['idOferta'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "detalleOferta';</script>";
    }
}
