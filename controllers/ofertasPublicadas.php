<?php

class OfertasPublicadas extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idEmp'])) {
            $this->loadModel('oferta');
            if (isset($_SESSION['paginaOP'])) {
                $limPagina =  $_SESSION['paginaOP'] - 1;
            } else {
                $limPagina = 0;
                $_SESSION['paginaOP'] = 1;
            }
            $ofertas = $this->model->ofertasEmpresa([
                'idEmp' => $_SESSION['idEmp'],
                'limPagina' => $limPagina
            ]);
            $this->view->ofertas = $ofertas;
            $numPaginas = $this->model->numPaginasEmpresa($_SESSION['idEmp']);
            $this->view->numPaginas = $numPaginas;
            $this->listarTres();
            $this->cursos();
            $this->view->render('ofertas-publicadas/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginEmpresa';</script>";
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

    function archivarOferta($id)
    {
        $this->loadModel('oferta');
        if ($this->model->archivarOferta($id[0])) {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
        }
    }

    function nuevaPagina($param = null)
    {
        $_SESSION['paginaOP'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
    }
}
