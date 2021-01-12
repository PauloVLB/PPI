<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Hello World em PHP</title>
    </head>
    <body>
        <h1>Hello, World</h1>

        <?php    
            echo "Guten Tag";
            echo "<br><br>Bitte";
        ?>
        <h1>Fibonacci: </h1>
        <?php 
            $f = array();
            $f[0] = 0;
            $f[1] = 1;
            echo $f[0], " ", $f[1], " ";
            for($i = 2; $i < 10; $i++) {
                $f[$i] = $f[$i-1] + $f[$i-2];
                echo $f[$i], " ";
            }
        ?>
    </body>
</html>