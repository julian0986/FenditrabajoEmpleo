<?php

class BuscarTrabajo extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->listarTres();
        $this->cursos();
        $this->view->render('buscar-trabajo/index');
    }

    function redireccionResultados()
    {
        $_SESSION['palabra']        = $_POST['palabra'];
        $_SESSION['departamento']   = $_POST['departamento'];
        $_SESSION['jornada']        = "";
        $_SESSION['salario']        = "";
        $this->view->render('resultados-general/index');
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB                = $this->model->listarTres();
        $this->view->publicidadB    = $publicidadB;
    }

    function cursos()
    {
        $this->loadModel('curso');
        $cursos                 = $this->model->listaUser();
        $this->view->cursos     = $cursos;
    }

    
}
