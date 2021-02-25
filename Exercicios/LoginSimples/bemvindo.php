<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Bem-Vindo!</title>
    </head>
    <body>
        <?php 
            require_once dirname(__FILE__).'/model/Usuario.php';

            $usuario = new Usuario();
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);

            echo '<strong>'.$usuario->getNome().'</strong>, seja muito bem-vindo!<br>';
            echo 'Email: <strong>'.$usuario->getEmail().'</strong>';
            echo '<br>Sua senha tem <strong>'.strlen($usuario->getSenha()).'</strong> caracteres'; 
        ?>
    </body>
</html>