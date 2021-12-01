<?php

class RegistrarOferta extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idEmp'])) {
            $this->cursos();
            $this->view->render('registrar-oferta-empresa/index');
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

    function agregarOferta()
    {
        $this->loadModel('oferta');
        $nombre = $_POST['nombre'];
        $departamento = $_POST['departamento'];
        $municipio = $_POST['municipio'];
        $salario = $_POST['salario'];
        $jornada = $_POST['jornada'];
        $descripcion = $_POST['descripcion'];
        $tipofecha = $_POST['disponiblidad'];
        $fechaFin = date('Y-m-d');
        if($tipofecha == 1){
            $fechaFin = date("Y-m-d",strtotime($fechaFin."+ 1 week")); 
        }
        else if($tipofecha == 2){
            $fechaFin = date("Y-m-d",strtotime($fechaFin."+ 2 week"));
        }
        else{
            $fechaFin = date("Y-m-d",strtotime($fechaFin."+ 1 month"));
        }
        $mensaje = "";
        if ($this->model->agregarOferta([
            'nombre' => $nombre,
            'departamento' => $departamento,
            'municipio' => $municipio,
            'salario' => $salario,
            'jornada' => $jornada,
            'descripcion' => $descripcion,
            'estado' => '1',
            'empresa' => $_SESSION['idEmp'],
            'fecha' => date('Y-m-d'),
            'fechaFin' => $fechaFin
        ])) {
            $mensaje = "Se publico la oferta exitosamente ";
        }
        $this->view->mensaje = $mensaje;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
    }
}
