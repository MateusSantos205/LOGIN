<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script src="https://apis.google.com/js/plataform.js" async defer></script>
        <meta name="google-signin-client_id" content="51278016828-lv1p9b9qi2f1pnun1avc957va87vs947.apps.googleusercontent.com">
        <title>Login - Unificado</title>
		
    </head>
    <body>
        Bem vindo <?php echo $_SESSION['userName']; ?>!

        <a href="login.php" onclick="signOut();">Sair</a>
        <script>
            function signOut() {
                // pega a instancia atual dom usuario, ou seja, o usuario que está logado no momento
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function (){
                    console.log('User signed out.');
                });
            }

        </script>
		
		
    </body>
</html>