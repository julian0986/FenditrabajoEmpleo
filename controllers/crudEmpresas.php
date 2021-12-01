<?php

class CrudEmpresas extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('empresa');
            if (!isset($_SESSION['nombreE'])) {
                $_SESSION['nombreE'] = "";
            }
            $limPagina =  $_SESSION['pagina'] - 1;
            $empresas = $this->model->listarEmpresas([
                'nombre' => $_SESSION['nombreE'],
                'limPagina' => $limPagina
            ]);
            $this->view->empresas = $empresas;
            $numPaginas = $this->model->numPaginasEmpresa();
            $this->view->numPaginas = $numPaginas;
            $this->view->render('crud-empresas/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function buscar()
    {
        $_SESSION['nombreE'] = $_POST['nombre'];
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudEmpresas';</script>";
    }

    function inicio()
    {
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudEmpresas';</script>";
    }

    function eliminarEmpresa($param = null)
    {
        $id = $param[0];
        $this->loadModel('empresa');
        if ($this->model->eliminar($id)) {
            $_SESSION['pagina'] = 1;
            echo "<script type='text/javascript'>alert('Se elimino con exito');location.href = '" . constant('URL') . "crudEmpresas';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Solo se pudo eliminar');location.href = '" . constant('URL') . "crudEmpresas';</script>";
        }
    }

    function nuevaPagina($param = null)
    {
        $_SESSION['pagina'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudEmpresas';</script>";
    }
}
