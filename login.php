<html>
<head>
    <meta name="Description" content="" />
    <meta http-equiv="" content="es"/>
    <meta name="Distribution" content=""/>    
    <link rel="stylesheet" type="text/css" href="./css.css" />

</head>
<body >
 
         <h2>Login</h2>
         <form class="contacto" action= "usuario.php" autocomplete="off" method="POST">
            <label>Usuario: </label>
            <input type="text" name="user"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" value="Enviar"/>
         </form>
          <h2>Registro</h2>
          <form class="contacto  " action= "registro.php" method="POST">
            <label>Usuario: </label>
            <input type="text" name="user"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" value="Enviar"/>
         </form>
</html>
