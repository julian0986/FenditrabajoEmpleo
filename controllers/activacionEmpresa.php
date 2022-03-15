<?php
    class ActivacionEmpresa extends Controller{

        function __construct(){
            parent::__construct();
            session_start();
        }

        function render(){

            $token = $_GET['token'];
            $this->loadModel('empresa');
            $this->view->active=$this->model->activeToken($token);
            $this->view->render('activacion-empresa/index');
        
        
        }
      
       



        
    }

?>