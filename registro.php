<?php
$user = $_POST['user'];
$password = $_POST['password'];
$nombre_archivo= "usuarios.txt";

if(file_exists($nombre_archivo)){
   
$usuario_existe= file_get_contents("./usuarios.txt");

echo $usuario_existe;

    if(strpos($usuario_existe,$user)!=false){

      echo "El usuario ya existe.";

    }else{

         if ((strpos($user,"@")!=false) && (strpos($user,".")!=false) &&  $user!=""  ) {


            if( preg_match('~[A-Z]~', $password) && preg_match('~[a-z]~',$password) && preg_match('~\d~',$password) && (strlen($password) >= 6) ) {
      
               // echo "Contraseña correcta";
               $linea = $user.':'.$password;
               if($archivo = fopen($nombre_archivo, "a")){
               fwrite($archivo,$linea."\r\n");
               fclose($archivo);
               //echo 'Usuario creado correctamente';
               session_start();
               $_SESSION['user'] = $user;
               $_SESSION['identificador'] = TRUE;
               header("refresh: 0; url=ok_login.php");
               }
    
            else {
               echo "La contraseña ha de contener mínimo 6 carácteres, algún número y alguna letra mayúscula"; 
            } 
}
}
else{

   echo "El usuario ya existe o no es correo electrónico";
 }
}
}


?>
