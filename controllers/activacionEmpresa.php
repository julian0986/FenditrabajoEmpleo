<?php
    class ActivacionEmpresa extends Controller{

        function __construct(){
            parent::__construct();
            session_start();
        }
        function render(){
            
            $this->view->render('activacion-empresa/index');
        }
      

        
    }

?>