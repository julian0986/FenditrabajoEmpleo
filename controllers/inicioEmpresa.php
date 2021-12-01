<?php

class InicioEmpresa extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->empresa = "";
    }

    function render()
    {
        if (isset($_SESSION['idEmp'])) {
            $this->loadModel('empresa');
            $empresa = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $this->view->empresa = $empresa;
            $this->listarTres();            
            $this->cursos();
            $this->view->render('inicio-empresa/index');
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
}
