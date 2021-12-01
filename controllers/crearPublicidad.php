<?php

class CrearPublicidad extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        if (isset($_SESSION['idUser']) && $_SESSION['rol'] == 2) {
            $this->view->render('crear-publicidad/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "loginPersona';</script>";
        }
    }

    function agregar()
    {
        $this->loadModel('publicidad');
        $nombre = $_POST['nombre'];
        $lema = $_POST['lema'];
        $imagen = $this->subirImagen();
        if (!$imagen) {
            $imagen = '';
        }
        $tipo = 1;
        $link = $_POST['link'];
        if ($this->model->nuevaPublicidad([
            'nombre' => $nombre,
            'lema' => $lema,
            'imagen' => $imagen,
            'tipo' => $tipo,
            'link' => $link
        ])) {
            echo "<script type='text/javascript'>alert('Se creo con exito'); location.href = '" . constant('URL') . "crudPublicidad';</script>";
        }
        $this->render();
    }

    function subirImagen()
    {
        $directorio = "public/publicidad/" . rand();
        if (isset($_FILES["file"]["name"])) {
        } else {
            return false;
        }
        $archivo = $directorio . basename($_FILES["file"]["name"]);

        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        if ($tipoArchivo) {
            $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);
            //var_dump($size);

            if ($checarSiImagen != false) {

                //validando tamaño del archivo
                $size = $_FILES["file"]["size"];

                if ($size > 1000000) {
                    echo "<script type='text/javascript'>alert('El archivo tiene que ser menor a 10 MB')</script>";
                } else {
                    //validar tipo de imagen
                    if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
                        // se validó el archivo correctamente
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
                            return $archivo;
                        } else {
                            echo "<script type='text/javascript'>alert('Hubo un error en la subida del archivo')</script>";
                        }
                    } else {
                        echo "<script type='text/javascript'>alert('Solo se admiten archivos jpg/jpeg/png')</script>";
                    }
                }
            } else {
                echo "<script type='text/javascript'>alert('El documento no es una imagen')</script>";
            }
        } else {
            return false;
        }
    }
}
