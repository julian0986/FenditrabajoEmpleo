<?php

class InicioPersona extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->persona = "";        
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 1) {
            $this->informacionPersona();
            $this->ofertas();
            $this->cursos();
            $this->listarTres();
            $this->view->render('inicio-persona/index');
        }else{
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function listarTres()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarTres();
        $this->view->publicidadB = $publicidadB;
    }
    
    function informacionPersona()
    {
        $this->loadModel('persona');
        $persona = $this->model->informacionPersona($_SESSION['idUser']);
        $this->view->persona = $persona;
    }

    function ofertas()
    {
        $this->loadModel('oferta');
        $ofertas = $this->model->buscarOfertas([
            'nombre' => "",
            'departamento' => "",
            'salario' => "",
            'jornada' => "",
            'limPagina' => "0"
        ]);
        if (count($ofertas) > 3) {
            $aux = [];
            for ($i = 0; $i < 3; $i++) {
                array_push($aux, $ofertas[$i]);
            }
            $this->view->ofertas = $aux;
        } else {
            $this->view->ofertas = $ofertas;
        }
    }

    function cursos()
    {
        $this->loadModel('curso');
        $cursos = $this->model->listaUser();
        $this->view->cursos = $cursos;
    }
    
}
