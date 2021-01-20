<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php 
            $n1 = 40;
            $n2 = 23;
            $op = "/";

            switch($op) {
                case "+":
                    echo "<h3>Adição</h3><hr>";
                    echo "$n1 $op $n2 = ".($n1 + $n2);
                    break;
                case "-":
                    echo "<h3>Subtração</h3><hr>";
                    echo "$n1 $op $n2 = ".($n1 - $n2);
                    break;
                case "*":
                    echo "<h3>Multiplicação</h3><hr>";
                    echo "$n1 $op $n2 = ".($n1 * $n2);
                    break;
                case "/":
                    echo "<h3>Divisão Inteira</h3><hr>";
                    echo "$n1 // $n2 = ".intdiv($n1, $n2)." e deixa resto ".($n1 % $n2); // não faria sentido uma divisão de ponto flutuante deixar resto
                    
                    echo "<h3>Divisão de ponto flutuante</h3><hr>";
                    echo "<br>$n1 / $n2 = ".($n1/$n2);
                    break;
                default:
                    echo "Operação inválida";
                    break;
            }
        ?>

    </body>
</html>