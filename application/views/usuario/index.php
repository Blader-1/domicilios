<?php 
  
  include 'conexion1.php';


 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Administracion</title>
  <link rel="stylesheet" href="css/fontello.css">

</head>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css2/mycss.css">
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css">
<body>
  <header>
    <div class="contenedor">
        <h1 class="icon-star">Domicilios blader</h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="pagina.html">Inicio</a>
                    <a href="leer.html">Comidas</a>
                    <a href="mexico.html">Mexico</a>
                    <a href="envio.html">Contacto</a>
                    <a href="index.php">Gestion P.</a>
                </nav>
            </div>
</header>

<div class="todo">
  <div id="cabecera">
    <img src="images/swirl.png" width="auto" id="img1">
    
  </div>

  <div id="contenido">
      <h1>Bienvenido Admin</h1>
      <p>Puede agregar, modificar y gestionar los pedidos</p>
     <table class="table table-light" style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;" >
      
    
     <thead>
       
     <tr>

      <td>Nombre</td>
      <td>Telefono</td>
      <td>Pedido</td>
      <td>Direccion</td>
      <td>Estado de su Pedido</td>



 
    </tr>
<tr> <a href="pedidos.html"> <button type="button" class="btn btn-info">Nuevo</button> </a> </tr>
      </thead>
    <?php 

    $sql="SELECT * from pedidos";
    $result=mysqli_query($conectar,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
     
    <td><?php echo $mostrar['nombre'] ?></td>
    <td><?php echo $mostrar['telefono'] ?></td>
    <td><?php echo $mostrar['pedido'] ?></td>
    <td><?php echo $mostrar['direccion'] ?></td>
    <td><?php echo $mostrar['Estadopedido'] ?></td>
    <td><form action="estadopedido.php" method="POST">
      <input type="hidden" name="ID" id="ID" value="<?php echo $mostrar['ID']; ?>" >

      <input type="submit" name="estado" value="Eliminar" class="btn btn-danger"></input>
    <input type="submit" name="estado" value="Enviar" class="btn btn-green"></input></form></td>

    </tr>
     <?php 
     }
     ?>
     </table>

</div>
<div id="footer">
      <img src="images/swirl2.png" id="img2">
    </div>
</div>

<br>
<script type="text/javascript">
    
             var resultado = window.confirm('¿Eres el administrador?');
             if (resultado === true) {
                 window.alert('Entonces iniciar sesion.');
                 window.location.href='csesion.html';
             } else { 
                 window.alert('lo sentimos no es el administrador');
                 window.location.href='leer.html';
             }
           
    </script>
  
</body>
</html>