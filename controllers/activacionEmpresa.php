<?php
    class ActicacionUser extends Controller{

        function __construct(){
            parent::__construct();
        }
        function render(){
            $this->view->render('activacion-empresa/index');
        }
    }

?>