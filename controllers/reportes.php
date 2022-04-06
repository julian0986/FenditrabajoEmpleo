<?php


class Reportes extends Controller
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
            $this->view->render('reportes/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function inicio()
    {
        $_SESSION['pagina'] = 1;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "reportes';</script>";
    }

    function numeroVacantestxt(){

        $this->loadModel('empresa');
        $total = $this->model->contarEmpresatxt();
        
        echo "el numero de vacantes registradas es |$$| ".$total;

        $miArchivo= fopen("archivo.txt","w");

            $r = iconv('UTF-8', 'Windows-1252', $total); // Codificación inicial, Codificación final, Cadena a convertir.

            fwrite($miArchivo, $r);

            fclose($miArchivo);


            header('Content-Disposition: attachment; filename=export.txt;');

        

    }


    function numeroVacantescsv(){

        $this->loadModel('empresa');
        $lista = $this->model->contarEmpresacsv($_SESSION['idEmpresa']);
        echo  $lista;
    
        
    }




 
    
}