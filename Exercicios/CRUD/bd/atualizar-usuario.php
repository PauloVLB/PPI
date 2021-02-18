<?php 
    
    $alterar = true;
    if(!isset($_POST['nome']) || empty($_POST['nome'])){
        $alterar = false;
    }
    if(!isset($_POST['email']) || empty($_POST['email'])){
        $alterar = false;
    }
    if(!isset($_POST['senha']) || empty($_POST['senha'])){
        $alterar = false;
    }

    if($alterar){
        $data = file('usuario');
        
        $usuarios = explode(',', $data[$_GET["id"]]);
        
        $usuarios[0] = $_POST['nome'];
        $usuarios[1] = $_POST['email'];
        $usuarios[2] = $_POST['senha'];

        $data[$_GET['id']] = implode(',', $usuarios) . "\n";


        $bd = fopen('usuario', 'w');

        foreach($data as $usuario) {
            fwrite($bd, $usuario);
        }

        fclose($bd);
    }

    header("Location: ../index.php");
?>