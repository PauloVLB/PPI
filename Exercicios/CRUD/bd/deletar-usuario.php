<?php
    $remover = true;

    if(!isset($_GET['id'])){
        $remover = false;
    }
    if($remover){
        $dados = file('usuario');
        unset($dados[$_GET['id']]);

        file_put_contents('usuario', $dados);
    }

    header('Location: ../index.php');
?>