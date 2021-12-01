<?php

    class Controller{

        function __construct()
        {
            $this->view = new View();
        }

        function loadModel($model)
        {
            $url = 'models/'.$model.'Model.php';
            if(file_exists($url)){
                $modelName = $model.'Model';
                if (!class_exists($modelName, false)) {
                    require $url;
                }          
               
                $this->model = new $modelName();
            }
        }

    }

?>