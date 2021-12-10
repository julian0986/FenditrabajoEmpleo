<?php

require 'models/entity/experiencia.php';

class ExperienciaModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function listar($usuario)
    {
        $items = [];
        try {            
            $query = $this->db->connect()->prepare('SELECT * FROM tb_experiencia WHERE fk_ex_usuario = :usuario');
            $query->execute([
                'usuario' => $usuario
            ]);

            while ($row = $query->fetch()) {
                $item = new Experiencia();
                $item->id = $row['ex_id'];
                $item->empresa = $row['ex_empresa'];
                $item->exPais = $row['ex_pais'];
                $item->departamento = $row['ex_departamento'];
                $item->exmunicipio = $row['ex_municipio'];
                $item->sector = $row['ex_sector'];
                $item->cargo = $row['ex_cargo'];
                $item->exocupacion = $row['ex_ocupacion'];
                $item->area = $row['ex_area'];
                $item->fechaInicio = $row['ex_fecha_inicio'];
                $item->fechaFin = $row['ex_fecha_fin'];
                $item->extotalexpe = $row['ex_total_expe'];
                $item->experfil = $row['ex_perfil'];
                $item->usuario = $row['fk_ex_usuario'];
                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function detalles($id)
    {
        try {            
            $query = $this->db->connect()->prepare('SELECT * FROM tb_experiencia WHERE ex_id = :id');
            $query->execute([
                'id' => $id
            ]);
            $item = new Experiencia();
            while ($row = $query->fetch()) {                
                $item->id = $row['ex_id'];
                $item->empresa = $row['ex_empresa'];
                $item->exPais = $row['ex_pais'];
                $item->departamento = $row['ex_departamento'];
                $item->exmunicipio = $row['ex_municipio'];
                $item->sector = $row['ex_sector'];
                $item->cargo = $row['ex_cargo'];
                $item->exocupacion = $row['ex_ocupacion'];
                $item->area = $row['ex_area'];
                $item->fechaInicio = $row['ex_fecha_inicio'];
                $item->fechaFin = $row['ex_fecha_fin'];
                $item->extotalexpe = $row['ex_total_expe'];
                $item->experfil = $row['ex_perfil'];
                $item->usuario = $row['fk_ex_usuario'];
            }
            return $item;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function agregar($datos){
        try {            
            $query = $this->db->connect()->prepare('INSERT INTO tb_experiencia(ex_empresa, ex_pais, ex_departamento, ex_municipio, ex_sector, ex_cargo, ex_ocupacion, ex_area, ex_fecha_inicio, ex_fecha_fin, ex_total_expe, ex_perfil, fk_ex_usuario) VALUES (:empresa,:exPais,:departamento,:exmunicipio,:sector,:cargo,:exocupacion,:area,:fechaInicio,:fechaFin,:extotalexpe,:experfil:usuario)');
            $query->execute([
                'empresa' => $datos['empresa'],
                'exPais' => $datos['exPais'],
                'departamento' => $datos['departamento'],
                'exmunicipio' => $datos['exmunicipio'],
                'sector' => $datos['sector'],
                'cargo' => $datos['cargo'],
                'exocupacion' => $datos['exocupacion'],
                'area' => $datos['area'],
                'fechaInicio' => $datos['fechaInicio'],
                'fechaFin' => $datos['fechaFin'],
                'extotalexpe' => $datos['extotalexpe'],
                'experfil' => $datos['experfil'],
                'usuario' => $datos['usuario']
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
        }

    }

    function editar($datos){
        try {            
            $query = $this->db->connect()->prepare('UPDATE tb_experiencia SET ex_empresa=:empresa,ex_pais=:exPais,ex_departamento=:departamento,ex_municipio=:exmunicipio,ex_sector=:sector,ex_cargo=:cargo,ex_ocupacion=:exocupacion,ex_area=:area,ex_fecha_inicio=:fechaInicio,ex_fecha_fin=:fechaFin,ex_total_expe=:extotalexpe,ex_perfil=:experfil WHERE ex_id=:id');
            $query->execute([
                'id' => $datos['id'],
                'empresa' => $datos['empresa'],
                'exPais' => $datos['exPais'],
                'departamento' => $datos['departamento'],
                'exmunicipio' => $datos['exmunicipio'],
                'sector' => $datos['sector'],
                'cargo' => $datos['cargo'],
                'exocupacion' => $datos['exocupacion'],
                'area' => $datos['area'],
                'fechaInicio' => $datos['fechaInicio'],
                'fechaFin' => $datos['fechaFin'],
                'extotalexpe' => $datos['extotalexpe'],
                'experfil' => $datos['experfil']
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
        }

    }

    function eliminar($experiencia){
        try{
            $query = $this->db->connect()->prepare('DELETE FROM tb_experiencia WHERE ex_id = :id');
            $query->execute([
                'id' => $experiencia
            ]);
            return true;
        }catch(PDOException $e) 
        {
            return false;
        }
    }

}