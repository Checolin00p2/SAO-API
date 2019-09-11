
        <?php
        $password = "kakaroto";
         // dht11.php
         //Importamos la configuracion
         require("login.php");
         // Leemos los valores que nos llegan por GET
         
        
        $Nombre_anime = mysqli_real_escape_string($login, $_POST['nanime']);
        $Temporada = mysqli_real_escape_string($login, $_POST['tiempo']);
        $Capitulo = mysqli_real_escape_string($login, $_POST['cap']);
        $Nombre = mysqli_real_escape_string($login, $_POST['nombre']);
        $Link = mysqli_real_escape_string($login, $_POST['link']);
         // EInsertamos los valores en la tabla
         if($_POST['pass'] == $password) {
         
         
        $query = "INSERT INTO `todoanime` (`Nombre del anime`, `Temporada`, `Capitulo`, `Nombre`, `Link`) VALUES('$Nombre_anime','$Temporada','$Capitulo','$Nombre','$Link')";
        
         // Ejecutamos la instruccion
         if (mysqli_query($login, $query)){
         echo "New record created successfully";
         ;
        } else {
              echo "Error: " . $query . "<br>" . mysqli_error($login);
              
              
        }
         
         }
         
         mysqli_close($login);
         header("Location: http://localhost/prueba/upload.html");
         
        ?>
      