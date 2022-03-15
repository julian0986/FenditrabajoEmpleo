<?php
    class ActivacionUser extends Controller{

        function __construct(){
            parent::__construct();
            session_start();
        }
        function render(){
            $token = $_GET['token'];
            $this->loadModel('persona');
            $this->view->active=$this->model->activeToken($token);
            $this->view->render('activacion-user/index');
        }
    }

?>