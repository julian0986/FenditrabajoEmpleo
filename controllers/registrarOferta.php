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
            $this->loadModel('empresa');
            $empresa = $this->model->informacionEmpresa($_SESSION['idEmp']);
            $this->view->empresa = $empresa;
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
        $ofTiempoExpe = $_POST['ofTiempoExpe'];
        $ofCantidad = $_POST['ofCantidad'];
        $ofCargo = $_POST['ofCargo'];
        $ofNivelEstudio = $_POST['ofNivelEstudio'];
        $ofProfesion = $_POST['ofProfesion'];
        $ofSectorEconomico = $_POST['ofSectorEconomico'];
        $descripcion = $_POST['descripcion'];
        $tipofecha = $_POST['disponiblidad'];
        $fechaFin = date('Y-m-d');
        $envio_mail_empresa = $this->model->obtener_correo_empresa($_SESSION['idEmp']);
        
        $envio_mail_empresa['em_correo_e'];
        
        
        if($tipofecha == 1){
            $fechaFin = date("Y-m-d",strtotime($fechaFin."+ 1 week")); 
        }
        else if($tipofecha == 2){
            $fechaFin = date("Y-m-d",strtotime($fechaFin."+ 2 week"));
        }
        else{
            $fechaFin = date("Y-m-d",strtotime($fechaFin."+ 1 month"));
        }

        if ($this->model->agregarOferta([
            'nombre' => $nombre,
            'departamento' => $departamento,
            'municipio' => $municipio,
            'salario' => $salario,
            'jornada' => $jornada,
            'ofTiempoExpe' => $ofTiempoExpe,
            'ofCantidad' => $ofCantidad,
            'ofCargo' => $ofCargo,
            'ofNivelEstudio' => $ofNivelEstudio,
            'ofProfesion' => $ofProfesion,
            'ofSectorEconomico' => $ofSectorEconomico,
            'descripcion' => $descripcion,
            'estado' => '1',
            'empresa' => $_SESSION['idEmp'],
            'fecha' => date('Y-m-d'),
            'fechaFin' => $fechaFin
        ])) {

            //$mensaje = "Se publico la oferta exitosamente ";
        }

            $to = $envio_mail_empresa['em_correo_e'];
            $from = 'From: soporte@fendipetroleo.com';
            $subject = 'Se ha publicado una oferta';
            $message = 'Se ha publicado una oferta para el cargo de ' . $nombre ;
             mail($to, $subject, $message, $from);
        //$this->view->mensaje = $mensaje;
        echo "<script type='text/javascript'>alert('Se publico la oferta exitosamente');location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
        //echo "<script type='text/javascript'>location.href = '" . constant('URL') . "ofertasPublicadas';</script>";
    }
}