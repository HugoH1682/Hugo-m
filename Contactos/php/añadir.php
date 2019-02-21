<?php
                  //Variables
         if(isset($_POST['Eliminar'])){
            $host="localhost";
            $dbusuario="root";
            $dbcontrasena="";
            $dbnombre="contactos";
            //creo la conexión con base de datos
            $conn = new mysqli ($host,$dbusuario,$dbcontrasena,$dbnombre);
            $sql = "DELETE FROM contactos WHERE nombre=$_POST['Nombre']";
            if($conn->query($sql)){
                echo "Eliminado";
            }else{
                echo "error";
            }
            
         }else{
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['Nombre'];
            $telefono = $_POST['Telefono']; 
         }
         if(!empty($nombre)){
            if(!empty($telefono)){
            $host="localhost";
            $dbusuario="root";
            $dbcontrasena="";
            $dbnombre="contactos";
            //creo la conexión con base de datos
            $conn = new mysqli ($host,$dbusuario,$dbcontrasena,$dbnombre);
            if(mysqli_connect_error()){
                die('Error de conexion('.mysqli_connect_errno().')'.mysqli_connect_error());
            }else{
                $sql = "INSERT INTO contactos (Nombre,Telefono) VALUES ('
                    $nombre',
                    '$telefono')";
                    if($conn->query($sql)){
                        echo "Contacto registrado!!";
                    }else{
                        echo "error";
                    }
            }
            }else{
               echo "Tienes que añadir un teléfono" ;
            }
             
         }else{
            echo "El nombre no puede estar vacío";
            die();
         }
        }
         ?>