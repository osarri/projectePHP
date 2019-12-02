<?php
require_once "Producto.php";
session_start();
if(isset($_SESSION['identificador'])){
   $identificador = $_SESSION['identificador'];
   $user = $_SESSION['user'];
}
$carrito_usuario="./carrito/$user.txt";

?>
<style>
   #imagenesCatalogoVenta{
    width: 115px;
    height: 107px;
    margin-bottom: -34px;
    margin-top: 46px;
}
</style>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css.css" />
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
</head>
<center><body>
 
    <center><img id="logo" src="./img/titulo.png"></center>
  
    <h1 class="titulo">Productos del <?php echo $user ?>:</h1>

<div class="datos">

<?php if (file_exists($carrito_usuario)){

$carrito=fopen($carrito_usuario,"r") or die ("No podemos mostrar su carrito");
$total_final=0;

while (!feof($carrito)){
list($fecha, $producto, $cantidad, $precio, $precio_total)= explode ("|",fgets($carrito));
if ($precio_total != NULL) {
   $total=(int)$precio_total;
   $total_final= $total_final + $total;
?>
<center> 
   <img id ="imagenesCatalogoVenta" width="80px" height="80px" src="<?php 
      if($precio == 190){
         echo $producto1->__get("imagen");
         }else{
            if($precio == 320){
               echo $producto2->__get("imagen");
               }else{
                  if($precio == 120){
                     echo $producto3->__get("imagen");
                  }
               }
            }?>" />
   <label><b>Producto: </b></label> 
   <input  type="text" name="plaza" value="<?php echo $producto;?>" disabled>
   <label><b>Cantidad: </b></label> 
   <input  type="text" name="plaza" value="<?php echo $cantidad;?>" disabled>
   <label><b>Precio por undiad: </b></label> 
   <input  type="text" name="plaza" value="<?php echo $precio;?>" disabled >
   <label><b>Precio Final: </b></label> 
   <input type="text" name="plaza" value="<?php echo $precio_total;?>" disabled>
 </div></center>
 
<?php 
} 
?>


<?php  
}	
fclose($carrito);
}
?>

<br><br><br><br>
<div>
   <center><label><b>Precio Total de la compra: </b></label> 
   <input type="text" name="plaza" value="<?php echo $total_final;?>" disabled></center> 
</div>


</body></center>
</html>