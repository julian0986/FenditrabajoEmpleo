<?php

    class Model
    {
        private $varDB;
        function __construct()
        {
            //$this->db = new DB();
            
           // $varBD = DB()->getInstance();
            
            try
            {   
                //$this->db = DB()::getInstance();
                $this->db = new DB();
                
            }catch(Exception $e)
            {
                print_r('Error de connection: ' . $e->getMessage());
            }
        }

    }

?>