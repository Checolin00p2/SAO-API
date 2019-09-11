<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SAO API</title>
        <link rel="shortcut icon" type="image/png" href="Imagenes/kirito.png" />
        <link rel="stylesheet" href="css/estilos.css">
      </head>

      <button1 type="button" onclick="location.href='upload.html'" class="btn btn-primary">Subir capitulos</button1>
      <!--
      <body>
      <section class="section">
        <div class="container">
            <h1>Sword Art Online</h1>
            <h2>Selecciona El Capitulo</h2>
            <input type="number" id="chaar" placeholder="Temporada">
            <input type="number" id="char" placeholder="Numero de capitulo">
            <br><br>
            <input type="button" id="cargar" value="Cargar"/>
            <div id="anime">
      </section>
      <script src="assets/js/FillTable.js"></script>
      <script src="assets/js/app.js"></script>-->



            
      <form action="select.php"   method="post" id="quesijale2">
        <h1>Todo Anime</h1>
        <h2>Buscador de anime</h2>
        <input type="text" name="naanime" placeholder="Nombre de anime" autocomplete="off">
        <input type="number" name="tiempo" placeholder="Temporada">
        <input type="number" name="cap" placeholder="Numero de capitulo">
        <br><br>
        
        <br><br>
        <input type="submit"  value="Cargar"/>
</form>
<?php
$password = "kakaroto";
 // dht11.php
 //Importamos la configuracion
 require("login.php");
 // Leemos los valores que nos llegan por GET
$Nomanime = mysqli_real_escape_string($login,$_POST['naanime']);
$Temporada = mysqli_real_escape_string($login, $_POST['tiempo']);
$Capitulo = mysqli_real_escape_string($login, $_POST['cap']);
if($Nomanime==null || $Temporada==null || $Capitulo ==null || $Temporada== 0 || $Capitulo == 0 ){echo "<p>Error...Por favor ingrese valores correctos</p>"; }else {
        # code...

 // EInsertamos los valores en la tabla
$query = "SELECT * FROM `todoanime` WHERE `Nombre del anime` LIKE '$Nomanime%' && `Temporada`=$Temporada && `Capitulo`=$Capitulo";

 // Ejecutamos la instruccion
$res = mysqli_query($login, $query);
$mostrar = mysqli_fetch_array($res);

        echo "<p>Nombre del Anime = $mostrar[1] </p>";       
        echo "<p>Temporada = $mostrar[2] </p>";
        echo "<p>Capitulo = $mostrar[3]</p>";
        echo "<p>Nombre del capitulo = $mostrar[4]</p>";
        echo "<p1><iframe width='680' height='480' frameborder='0' src='$mostrar[5]' scrolling='no' allowfullscreen='' ></iframe></p1>";}
/*
        echo "<p>{</p>";
        echo "<p>   \"$mostrar[0]\":</p>";
        echo "<p>   [</p>";
        echo "<p>       {</p>";

        echo "<p>           \"id\": $mostrar[1],</p>";
        echo "<p>           \"chapter\": \"$mostrar[1]\",</p>";
        echo "<p>           \"name\": \"$mostrar[2]\",</p>";
        echo "<p>           \"season\": \"$mostrar[0]\",</p>";
        echo "<p>           \"video\": \"$mostrar[3]\"</p>";

        echo "<p>       }</p>";
        echo "<p>   ]</p>";
        echo "<p>}</p>";
*/

?>


       
</body>
</html>
