<?php

// Cria um vetor
$usuarios = [];

/*
Para ADICIONAR um item ao vetor:
- junto ao nome da variável use os COLCHETES
*/
// Adiciona o querido professor ao vetor
$usuarios[] = ["Marcelo Figueiredo Barbosa Júnior", 31, "Professor"];

//Adiciona xs lindxs alunxs do professor
$usuarios[] = ["Ana Alice Galdino Cavalcante", 16, "Alunx"];
$usuarios[] = ["Clemerson Lucas de Oliveira Campelo", 16, "Alunx"];
$usuarios[] = ["Bruna Kevenlly Pontes Soares", 16, "Alunx"];
$usuarios[] = ["Caio César Penha Dantas", 16, "Alunx"];
$usuarios[] = ["Fernanda Emily Souza do Nascimento", 16, "Alunx"];
$usuarios[] = ["Douglas Gabriel da Silva Araujo", 16, "Alunx"];
$usuarios[] = ["Fernanda Soares Fernandes", 16, "Alunx"];
$usuarios[] = ["Francisco Eduardo do Nascimento", 16, "Alunx"];
$usuarios[] = ["Késia Thaise Viana Vicente", 16, "Alunx"];
$usuarios[] = ["Guilherme Augusto Araújo de Andrade", 16, "Alunx"];
$usuarios[] = ["Lívia Cristina de Lima Rafael", 16, "Alunx"];
$usuarios[] = ["Henrique Eduardo Costa da Silva", 16, "Alunx"];
$usuarios[] = ["Luma Deiziane Lopes da Silva", 16, "Alunx"];
$usuarios[] = ["Isaac Marlon da Silva Lourenço", 16, "Alunx"];
$usuarios[] = ["Isabel Campelo da Silva", 16, "Alunx"];
$usuarios[] = ["Isac Luís Justino Rodrigues", 16, "Alunx"];
$usuarios[] = ["Karmen Luiza Pinheiro de Paiva", 16, "Alunx"];
$usuarios[] = ["Lucas Ramon Martins Dias", 16, "Alunx"];
$usuarios[] = ["Luciana Azevedo da Silva", 16, "Alunx"];
$usuarios[] = ["Matheus Vinícius Ataide Rosa Silva", 16, "Alunx"];
$usuarios[] = ["Michelly Lopes de Carvalho", 16, "Alunx"];
$usuarios[] = ["Paulo Vitor Lima Borges", 16, "Alunx"];
$usuarios[] = ["Nathália Barbosa Praxedes de Souza", 16, "Alunx"];
$usuarios[] = ["Pablo Henrique da Silva Oqueres", 16, "Alunx"];
$usuarios[] = ["Pávila Louyse da Silva Santos", 16, "Alunx"];
$usuarios[] = ["Rafael Cavalcante dos Santos", 16, "Alunx"];
$usuarios[] = ["Yasmim Lorrany Dantas Araújo", 16, "Alunx"];
$usuarios[] = ["Reinaldo Belarmino de Macedo Neto", 16, "Alunx"];
$usuarios[] = ["Sofia Teresa de Carvalho Silva Alves", 16, "Alunx"];
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Lista participantes</title>
  </head>
  <body>
    <?php
        echo "<ul>";
        foreach($usuarios as $usuario) {
            echo "<li>";
            echo "<h3>Nome: $usuario[0]</h3>";
            echo "<h4>Função: $usuario[2]</h4>";
            echo "<p>Idade: $usuario[1]</p>";
            echo "</li>";
        }
        echo "</ul>";
    ?>
  </body>
</html>