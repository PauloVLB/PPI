<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            $pi = 3.1415;
            echo 'O valor aproximado de pi é '.$pi.'...';
            echo "<hr>";
            echo 'pi é definido por Comprimento/Diâmetro';
            echo "<hr>";

            $medida = "Comprimento";
            switch($medida) {
                case "Área":
                    $medida = $medida." = pi*Raio*Raio";
                    break;
                case "Comprimento":
                    $medida = $medida." = pi*Raio*2";
                    break;
                default:
                    $medida = $medida." Não identificado";
                    break;
            }

            echo "$medida";
        ?>
    </body>
</html>