<?php

class Postulados extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->personas = [];
    }

    function render()
    {
        if (isset($_SESSION['idEmp'])) {
            $this->loadModel('aspiracion');
            $limPagina =  $_SESSION['pagina'] - 1;
            $personas = $this->model->personasOfeta([
                'idOfe' => $_SESSION['idOfe'],
                'limPagina' => $limPagina
            ]);
            $this->view->personas = $personas;
            $numPaginas = $this->model->numPaginasPersonas($_SESSION['idOfe']);
            $this->view->numPaginas = $numPaginas;
            $this->listarTres();
            $this->view->render('postulados/index');
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


    function verPostulados($param = null)
    {
        $_SESSION['idOfe'] = $param[0];
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "postulados';</script>";
    }

    function seleccionar($param = null)
    {
        $id = $param[0];
        $this->loadModel('aspiracion');
        if ($this->model->seleccionar($id)) {
            echo "<script type='text/javascript'>alert('Usuario seleccionado con éxito');location.href = '" . constant('URL') . "postulados';</script>";
        }
    }

    function nuevaPagina($param = null)
    {
        $_SESSION['pagina'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "postulados';</script>";
    }
}
