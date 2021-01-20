<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Par ou Ímpar</title>
    </head>
    <body>
        <?php 
            $numero = 42; 
            if($numero%2 == 0) {
                echo "O número $numero é par";
            } else {
                echo "O número $numero é ímpar";
            }
        ?>
    </body>
</html>