<?php

session_start();

include_once("conexao.php");
$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);

$result_usuario = "SELECT * FROM usuario WHERE email='$email' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
// encontrado usuario com esse e-mail
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
    $userName = filter_input(INPUT_POST, 'userName, ILTER_SANITIZE_STRING');
    $_SESSION['userName']=$userName;
    $resultado = 'adm.php';
    echo $resultado;
}else{// nenhum usuário encontrado
    $resultado = 'erro';
    echo(json_encode($resultado));
    
}

?>