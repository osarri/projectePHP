<?php
$user = $_POST['user'];
$password = $_POST['password'];
$usuario_existe= file_get_contents("./usuarios.txt");


$comprobar=$user.":".$password."\r\n";

echo $comprobar;
echo $usuario_existe;

if(strpos($usuario_existe,$comprobar)!=false){

    echo "el usuario está en el txt";
    session_start();
    $_SESSION['identificador']= TRUE;
    $_SESSION['user'] = $user;
    header('Location: ok_login.php');

}
else{

    header('Location:login.php');
}
?> 


