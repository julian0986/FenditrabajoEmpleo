<?php


class DetalleOfertaUser extends Controller
{
    public $id = "";

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idUser'])) {
            $this->loadModel('oferta');
            $ofertaId = $_SESSION['ofetaId'];
            $oferta = $this->model->ofertaId($ofertaId);
            $this->view->oferta = $oferta;
            $this->listarTres();
            $this->cursos();
            $this->view->render('detalle-oferta-user/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
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
        $_SESSION['ofetaId'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "detalleOfertaUser';</script>";
    }
}
