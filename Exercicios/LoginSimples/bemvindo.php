<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Bem-Vindo!</title>
    </head>
    <body>
        <?php 
            echo $_POST['nome'].", seja muito bem-vindo!<br>";
            echo 'Email: '.$_POST['email'];
            echo '<br>Sua senha tem '.strlen($_POST['senha']).' caracteres'; 
        ?>
    </body>
</html>