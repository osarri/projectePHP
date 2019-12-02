<?php
session_start();
if(isset($_SESSION['identificador'])){
$identificador = $_SESSION['identificador'];
$user = $_SESSION['user'];

if ($identificador == TRUE){

$cantidad = $_POST['cant'];
$precio= $_REQUEST['Precio'];
$Nombre_Producto= $_REQUEST['Nombre_Producto'];
$precio_total= $precio*$cantidad;

    
}else{
    echo "<script>location.href = 'ok_login.php'</script>";
}
}


$nombre_archivo = "./carrito/$user.txt";

$mensaje = $Nombre_Producto."|".$cantidad."|".$precio."|".$precio_total;

if(file_exists($nombre_archivo)) {


        if($archivo = fopen($nombre_archivo, "a")) {

            if(fwrite($archivo,"\r\n".date("d m Y H:m:s")."|".$mensaje))
            {
            echo "<script>alert('Producto añadido correctamente');</script>";
            }
            else
            {
            echo "<script>alert('El producto no se ha podido añadir al carrito');</script>";
            }
 
    fclose($archivo);
}
}
else{

    if($archivo = fopen($nombre_archivo, "a")) {

        if(fwrite($archivo,date("d m Y H:m:s")."|".$mensaje))
        {
        echo "<script>alert('Producto añadido correctamente');</script>";
        }
        else
        {
        echo "<script>alert('El producto no se ha podido añadir al carrito');</script>";
        }

fclose($archivo);
}

}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css.css" />
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
</head>
<center><body>
 
    <center><img id="logo" src="./img/titulo.png"></center>
  
    <h1 class="titulo">Productos del <?php echo $user ?>:</h1>
    
 <div class="datos">
 <label>Cantidad: </label> 
    <input id="<?php $nombre_archivo ?>" type="text" name="plaza" value="<?php echo $cantidad;?>" disabled>
 <label>Precio por undiad: </label> 
    <input id="<?php $nombre_archivo ?>" type="text" name="plaza" value="<?php echo $precio;?>" disabled >
 <label>Precio Final: </label> 
    <input id="<?php $nombre_archivo ?>" type="text" name="plaza" value="<?php echo $precio_total;?>" disabled>
 </div>

    
<?php header("location: ok_login.php")?>
<!-- Gracies a que redireccionem al usuari cap a ok_login, tot l'anterior no caldrà mostrar-ho -->
  
</body></center>
</html>
