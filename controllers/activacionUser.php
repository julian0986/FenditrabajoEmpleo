<?php
    class ActivacionUser extends Controller{

        function __construct(){
            parent::__construct();
            session_start();
        }
        function render(){
            $this->view->render('activacion-user/index');
        }
    }

?>