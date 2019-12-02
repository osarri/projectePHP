<?php
require_once "Producto.php";
session_start();
if(isset($_SESSION['identificador'])){
$identificador = $_SESSION['identificador'];
$user = $_SESSION['user'];
if ($identificador == TRUE){
    echo '<b>Bienvenido/a: '.$user.'</b><br>';              
    echo '<br>';
    
}else{
    echo "<script>location.href = 'login.php'</script>";
}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css.css" />

    <link href="https://fonts.googleapis.com/css?family=Helvetica&display=swap" rel="stylesheet">
  

</head>
<center><body>
    <div class="imagenExit">
    <a href="cerrar_sesion.php"><img id="exit"  src="./img/exit.svg" title="Cerrar Sesion"/></a>
    </div>
    <center><img id="logo" src="./img/titulo.png"></center>
     <div class="imagenCarrito">
     <a href="carrito_completo.php"><img id="cesta" type="submit" src="./img/cesta.svg" title="Ver carrito"/></a>
        </div>
    <h1 class="titulo">Productos:</h1>
    <div class="producto">
        <center><p><b>Auriculares Sony</b><p>
        <img name="imgProducto" id ="producto1" src="<?php echo $producto3->__get("imagen");?>"><br><br>
        <form class="productosFormulario" action= "carrito.php" autocomplete="off" method="POST">
            <input  class="form_product" type="hidden" name="Nombre_Producto" value="<?php echo $producto3->__get("nombre");?>"/><br>
            <label>Precio €</label>
            <input id="id2" type="text" name="Precio" value="<?php echo $producto3->__get("precio");?>" pleacerholder="€" readonly focus/><br>
            <label>Cantidad: </label>
            <input id = "id3" placeholder="Introduzca nº de productos"  type="text" name="cant" required/><br><br>
            <input type="submit" value="Añadir al carrito"/>
         </form>
       
    </div>
    <div class="producto">
    <center><p><b>iPod</b><p>
        <img  name="imgProducto" id ="producto2" src="<?php echo $producto2->__get("imagen");?>"><br><br>
      
        <form class="productosFormulario" action= "carrito.php" autocomplete="off" method="POST">
            <input  class="form_product" type="hidden" name="Nombre_Producto" value="<?php echo $producto2->__get("nombre");?>"/><br>
            <label>Precio €</label>
            <input id="id2" type="text" name="Precio" value="<?php echo $producto2->__get("precio");?>" pleacerholder="€" readonly focus/><br>
            <label>Cantidad: </label>
            <input id="id3" placeholder="Introduzca nº de productos"  type="text" name="cant" required/><br><br>
            <input type="submit" value="Añadir al carrito"/>
         </form></center>
    </div>

    

    <div class="producto">
        <center><p><b>Auriculares AirPods</b><p>
        <img name="imgProducto" id ="producto3"  src="<?php echo $producto1->__get("imagen");?>"><br><br>
        <form class="productosFormulario" action= "carrito.php" autocomplete="off" method="POST">
            <input  class="form_product" type="hidden" name="Nombre_Producto" value="<?php echo $producto1->__get("nombre");?>"/><br>
            <label>Precio €</label>
            <input id="id2" type="text" name="Precio" value="<?php echo $producto1->__get("precio");?>" readonly focus/><br>
            <label>Cantidad: </label>
            <input id = "id3" placeholder="Introduzca nº de productos"  type="text" name="cant" required/><br><br>
            <input type="submit"  value="Añadir al carrito"/>
         </form></center>
    </div>
</body></center>

</html>

