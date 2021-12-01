<?php

class PublicarOfertas extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->listarTres();
        $this->cursos();
        $this->view->render('publicar-ofertas/index');
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }

    function cursos()
    {
        $this->loadModel('curso');
        $cursos = $this->model->listaUser();
        $this->view->cursos = $cursos;
    }
}
