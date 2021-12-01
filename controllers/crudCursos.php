<?php
class CrudCursos extends Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('curso');
            if (!isset($_SESSION['nombreC'])) {
                $_SESSION['nombreC'] = "";
            }
            $limPagina =  $_SESSION['pagina'] - 1;
            $cursos = $this->model->listar([
                'nombre' => $_SESSION['nombreC'],
                'limPagina' => $limPagina
            ]);
            $this->view->cursos = $cursos;
            $numPaginas = $this->model->numPaginasCursos();
            $this->view->numPaginas = $numPaginas;
            $this->view->render('crud-cursos/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function buscar()
    {
        $_SESSION['nombreC'] = $_POST['nombre'];
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudCursos';</script>";
    }

    function inicio()
    {
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudCursos';</script>";
    }


    function nuevaPagina($param = null)
    {
        $_SESSION['pagina'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudCursos';</script>";
    }

    function eliminar($param = null)
    {
        $id = $param[0];
        $this->loadModel('curso');
        if ($this->model->eliminar($id)) {
            $_SESSION['pagina'] = 1;
            echo "<script type='text/javascript'>alert('Se elimino con exito');location.href = '" . constant('URL') . "crudCursos';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Solo se pudo eliminar');location.href = '" . constant('URL') . "crudCursos';</script>";
        }
    }
}
