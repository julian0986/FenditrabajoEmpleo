<?php

class ResultadosGeneral extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->ofertas = [];
    }

    function render()
    {
        $this->loadModel('oferta');
        $palabra = $_SESSION['palabra'];
        $departamento = $_SESSION['departamento'];
        $jornada = $_SESSION['jornada'];
        $salario = $_SESSION['salario'] . '00000';
        $limPagina =  $_SESSION['pagina'] - 1;

        $ofertas = $this->model->buscarOfertas([
            'nombre' => $palabra,
            'departamento' => $departamento,
            'salario' => $salario,
            'jornada' => $jornada,
            'limPagina' => $limPagina

        ]);
        $this->view->ofertas = $ofertas;
        $numPaginas = $this->model->numPaginasOfertas();
        $this->view->numPaginas = $numPaginas;
        $this->listarTres();
        $this->cursos();
        $this->view->render('resultados-general/index');
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

    function buscar()
    {
        $_SESSION['pagina'] = 1;
        $_SESSION['palabra'] = $_POST['nombre'];
        $_SESSION['departamento'] = $_POST['departamento'];
        if (isset($_POST['salario'])) {
            $_SESSION['salario'] = $_POST['salario'];
        } else {
            $_SESSION['salario'] = "";
        }
        if (isset($_POST['jornada'])) {
            $_SESSION['jornada'] = $_POST['jornada'];
        } else {
            $_SESSION['jornada'] = "";
        }

        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "resultadosGeneral';</script>";
    }

    function reiniciar()
    {
        $_SESSION['pagina'] = 1;
        $_SESSION['palabra'] = "";
        $_SESSION['departamento'] = "";
        $_SESSION['salario'] = "";
        $_SESSION['jornada'] = "";
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "resultadosGeneral';</script>";
    }

    function nuevaPagina($param = null)
    {
        $_SESSION['pagina'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "resultadosGeneral';</script>";
    }

    function buscarSugerido($param)
    {
        $_SESSION['pagina'] = 1;
        $_SESSION['palabra'] = $param[0];
        $_SESSION['departamento'] = "";
        $_SESSION['salario'] = "";
        $_SESSION['jornada'] = "";
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "resultadosGeneral';</script>";
    }
}
