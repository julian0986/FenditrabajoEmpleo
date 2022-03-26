<?php


    require 'models/entity/curso.php';
    require 'models/entity/persona.php';

        
    class CursoUsuarioModel extends Model
        {

            function __construct()
            {
                parent::__construct();
            }


        function aplicarCursoUsuario($curso,$usuario){ 

            $query = $this->db->connect()->prepare('SELECT * FROM tb_curso_usuario WHERE fk_usuario = :usuario AND fk_curso = :curso');
            $query->execute([
                'usuario' => $usuario,
                'curso' => $curso
            ]);

            if (!$query->rowCount()){


            $query = $this->db->connect()->prepare('INSERT INTO tb_curso_usuario(fk_usuario, fk_curso, cu_us_fecha, cu_us_estado) VALUES (:usuario,:curso,:fecha,1)');
                    $query->execute([
                        'usuario' => $usuario,
                        'curso' => $curso,
                        'fecha' => date('Y-m-d')
                    ]);

                    

            return true;   

         } else {
             
            return false;
         }
                
                
    }

    

            function aplicarCursoUsuarioold($datos)
        {
            try {

                $query = $this->db->connect()->prepare('SELECT * FROM tb_curso_usuario WHERE fk_usuario = :usuario AND fk_curso = :curso');
                $query->execute([
                    'usuario' => $datos['usuario'],
                    'curso' => $datos['curso']

                
                ]);

                
                 
                if (!$query->rowCount()) {

                    $query = $this->db->connect()->prepare('INSERT INTO tb_curso_usuario(fk_usuario, fk_curso, cu_us_fecha, cu_us_estado) VALUES (:usuario,:curso,:fecha,1)');
                    $query->execute([
                        'usuario' => $datos['usuario'],
                        'curso' => $datos['curso'],
                        'fecha' => $datos['fecha']
                    ]);
                }
                return true;
            } catch (PDOException $e) {
                echo "error con el servidor";
            }
        }




        }