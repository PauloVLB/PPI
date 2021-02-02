<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Bem-Vindo!</title>
    </head>
    <body>
        <?php 
            echo '<strong>'.$_POST['nome'].'</strong>, seja muito bem-vindo!<br>';
            echo 'Email: <strong>'.$_POST['email'].'</strong>';
            echo '<br>Sua senha tem <strong>'.strlen($_POST['senha']).'</strong> caracteres'; 
        ?>
    </body>
</html>