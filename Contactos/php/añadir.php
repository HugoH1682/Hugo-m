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
           //REVISO QUE NO QUIERAN INJECTAR CÓDIGO COMPROBANDO QUE EN EFECTO FUE POR EL BOTÓN DE SUBMIT
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['Nombre'];
            $telefono = $_POST['Telefono']; 
         }
          //VALIDO SI EL NOMBRE Y EL TELEFÓNO SEAN CAMPOS LLENADOS POR EL USUARIO
         if(!empty($nombre)){
            if(!empty($telefono)){
             //COMO FUERON VERDAD ESTAS CONDICIONES PROSIGO CON HACER LA CONEXIÓN A MI BASE DE DATOS
            $host="localhost";
            $dbusuario="root";
            $dbcontrasena="";
            $dbnombre="contactos";
            //creo la conexión con base de datos
            $conn = new mysqli ($host,$dbusuario,$dbcontrasena,$dbnombre);
             //LE NOTIFICO AL USUARIO SI HUBO UN ERROR Y CUÁL FUE
            if(mysqli_connect_error()){
                die('Error de conexion('.mysqli_connect_errno().')'.mysqli_connect_error());
            }else{
              //CREO LA CONSULTA PARA INSERTAR LOS DATOS DEL FORMULARIO
                $sql = "INSERT INTO contactos (Nombre,Telefono) VALUES ('
                    $nombre',
                    '$telefono')";
              //HAGO LA CONSULTA (O INTENTO)
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
