<?php

    class SubirHv extends Controller{

        function __construct(){
            parent::__construct();
        }
        function render(){
            $this->view->render('subir-hv/index');
        }

    }
?>