<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Variáveis e condicionais</title>
    </head>
    <body>
        <?php 
            $name = "Paulo";
            if($name[0] == "P") {
                echo "Seu nome começa com P, $name";
            } else {
                echo "Seu nome não começa com P, $name";
            }
        ?>
    </body>
</html>