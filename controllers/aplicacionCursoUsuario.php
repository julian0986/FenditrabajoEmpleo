<?php

class AplicacionCursoUsuario extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->loadModel('cursoUsuario');
    }

    function render()   
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 1) {
            ($_SESSION['idUser']);
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function aplicarCursoUsuario(){
        $curso_id = $_POST['curso_id'];
        $id_usuario = $_SESSION['idUser'];

        $data = $this->model->aplicarCursoUsuario($curso_id,$id_usuario);
        if($data){
            echo true;
        }else{
            echo false;
        }
    }

    function aplicarCursoUsuarioOld($param = null)
    {  
        $idCurso = $param[0];
        $usuario = $_SESSION['idUser'];
        $fecha = date("Y-m-d"); 
        
        
        if($this->model->aplicarCursoUsuario(['curso' => $idCurso, 'usuario' => $usuario, 'fecha' => $fecha])) {
            echo 'se aplico con exito';
        }else {

            echo 'no se pudo aplicar al curso';


            
        }
    
        
    }

}