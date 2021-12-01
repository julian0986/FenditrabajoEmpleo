<?php

class CrudUsuarios extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->loadModel('persona');
            if (!isset($_SESSION['nombreU'])) {
                $_SESSION['nombreU'] = "";
            }
            $limPagina =  $_SESSION['pagina'] - 1;
            $usuarios = $this->model->listarUsuarios([
                'nombre' => $_SESSION['nombreU'],
                'limPagina' => $limPagina
            ]);
            $this->view->usuarios = $usuarios;
            $numPaginas = $this->model->numPaginasPersona();
            $this->view->numPaginas = $numPaginas;
            $this->view->render('crud-usuarios/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function buscar()
    {
        $_SESSION['nombreU'] = $_POST['nombre'];
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudUsuarios';</script>";
    }

    function inicio()
    {
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudUsuarios';</script>";
    }


    function eliminarUsuario($param = null)
    {
        $id = $param[0];
        $this->loadModel('persona');
        if ($this->model->eliminar($id)) {
            $_SESSION['pagina'] = 1;
            echo "<script type='text/javascript'>alert('Se elimino con exito');location.href = '" . constant('URL') . "crudUsuarios';</script>";
        } else {
            echo "<script type='text/javascript'>alert('No se pudo eliminar');location.href = '" . constant('URL') . "crudUsuarios';</script>";
        }
    }

    function nuevaPagina($param = null)
    {
        $_SESSION['pagina'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "crudUsuarios';</script>";
    }
}
